<?php
namespace App\Observers;

use App\Models\Article;
use App\Models\Category;
use DOMDocument;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use Spatie\Crawler\CrawlObservers\CrawlObserver;
use Psr\Http\Message\UriInterface;
use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Support\Facades\Log;
use Symfony\Component\DomCrawler\Crawler;


class CustomCrawlerItemObserver extends CrawlObserver {

    private $content;

    public function __construct() {
        $this->content = NULL;
    }
    /**
     * Called when the crawler will crawl the url.
     *
     * @param \Psr\Http\Message\UriInterface $url
     */
    public function willCrawl(UriInterface $url): void
    {
        Log::info('willCrawl',['url'=>$url]);
//        echo "Now crawling: " . (string) $url . PHP_EOL;
    }

    /**
     * Called when the crawler has crawled the given url successfully.
     *
     * @param \Psr\Http\Message\UriInterface $url
     * @param \Psr\Http\Message\ResponseInterface $response
     * @param \Psr\Http\Message\UriInterface|null $foundOnUrl
     */
    public function crawled(
        UriInterface $url,
        ResponseInterface $response,
        ?UriInterface $foundOnUrl = null
    ): void
    {
        $doc = new DOMDocument();

        @$doc->loadHTML($response->getBody());
            //# save HTML
        $content = $doc->saveHTML();

        $crawler = new Crawler($content);

        $title = $crawler->filter('.title-detail')->text();
        $contentArticle = $crawler->filter('.Normal');
        $description = $crawler->filter('.description')->text();
        $category = $crawler->filter("#dark_theme > section.section.page-detail.top-detail > div > div.sidebar-1 > div.header-content.width_common > ul > li:nth-child(1) > a")->text();

        // image
        $img = $crawler->filter("#dark_theme > section.section.page-detail.top-detail > div > div.sidebar-1 > article > figure > div.fig-picture > picture > img");
        $img = $img->attr('data-src');

        // id_category
        $cate = Category::where('slug', Str::slug(mb_convert_encoding($category, "ISO-8859-1", "UTF-8")))->first();
        if (!$cate){
            Category::create([
                'name' => mb_convert_encoding($category, "ISO-8859-1", "UTF-8"),
                'slug' => Str::slug(mb_convert_encoding($category, "ISO-8859-1", "UTF-8"))
            ]);
        }

        $idCate = Category::where('slug', Str::slug(mb_convert_encoding($category, "ISO-8859-1", "UTF-8")))->first();
        $idCate = $idCate->id;

        //date
        $time = $crawler->filter('.date')->text();
        $date = explode(", ", $time);
        $date = explode("/", $date[1]);
        $date = $date[2]. "-". $date[1] . "-" . $date[0];

        /// contents
        $contentMain = "";
        foreach ($contentArticle as $item) {
            $contentMain .= $item->textContent;
        }

        ///author
        $t = strrev($contentMain);
        $x = explode(".", $t);
        $author = strrev($x[0]);

        ///data
        $dataPost = [
            'tittle' => mb_convert_encoding($title, "ISO-8859-1", "UTF-8"),
            'contents' => mb_convert_encoding($contentMain, "ISO-8859-1", "UTF-8"),
            'description' => mb_convert_encoding($description, "ISO-8859-1", "UTF-8"),
            'author' => mb_convert_encoding($author, "ISO-8859-1", "UTF-8"),
            'date' => $date,
            'id_category' => $idCate,
            'image' => $img,
            'slug' => Str::slug(mb_convert_encoding($title, "ISO-8859-1", "UTF-8"))
        ];

        Article::create($dataPost);

    }

    /**
     * Called when the crawler had a problem crawling the given url.
     *
     * @param \Psr\Http\Message\UriInterface $url
     * @param \GuzzleHttp\Exception\RequestException $requestException
     * @param \Psr\Http\Message\UriInterface|null $foundOnUrl
     */
    public function crawlFailed(
        UriInterface $url,
        RequestException $requestException,
        ?UriInterface $foundOnUrl = null
    ): void
    {
        Log::error('crawlFailed',['url'=>$url,'error'=>$requestException->getMessage()]);
    }

    /**
     * Called when the crawl has ended.
     */
    public function finishedCrawling(): void
    {
        Log::info("finishedCrawling");
        //# store $this->content in DB
        //# Add logic here
    }
}
