<?php
namespace App\Observers;

use App\Models\Article;
use App\Models\Category;
use DOMDocument;
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
//        $doc = new DOMDocument();

//        @$doc->loadHTML('<meta http-equiv="Content-Type" content="text/html; charset=utf-8">' . $response->getBody());
            //# save HTML
//        $content = $doc->saveHTML();

//        $crawler = new Crawler($content);

        $crawler = new Crawler((string)$response->getBody());

//        $title = $crawler->filter('.title-detail')->text();
        $title = $this->crawlData('.title-detail', $crawler);
        $description = $this->crawlDataHtml('.description', $crawler);
        $contentArticle = $this->crawlDataHtml("#dark_theme > section.section.page-detail.top-detail > div > div.sidebar-1 > article", $crawler);

        $category = $this->crawlData("#dark_theme > section.section.page-detail.top-detail > div > div.sidebar-1 > div.header-content.width_common > ul > li:nth-child(1) > a", $crawler);

        // image
//        $img = $crawler->filter("#dark_theme > section.section.page-detail.top-detail > div > div.sidebar-1 > article > figure > div.fig-picture > picture > img");
//        $img = $img->attr('data-src');
        $image = "";
        $img = $crawler->filter("#dark_theme > section.section.page-detail.top-detail > div > div.sidebar-1 > article > figure > div.fig-picture > picture > img")->each(function ($node) {
            return $node->attr('data-src');
        });

        if (!empty($img)){
            $image = $img[0];
        }

        // id_category
        $cate = Category::where('slug', Str::slug($category))->first();
        if (!$cate && $category){
            Category::create([
                'name' => $category,
                'slug' => Str::slug($category)
            ]);
        }

        $idCate = Category::where('slug', Str::slug($category))->first();
        if ($idCate) {
            $idCate = $idCate->id;
        }else{
            $idCate = "";
        }

        //date
        $date = "";
        $time = $crawler->filter('.date')->each(function ($node) {
            return $node->text();
        });

        if (!empty($time)){
            $date = explode(", ", $time[0]);
            $date = explode("/", $date[1]);
            $date = $date[2]. "-". $date[1] . "-" . $date[0];
        }

        /// author
        ///
//        $author = $crawler->filter('.Normal')->last();
//        dd($author->text());
        $author = "";
//        $listAuthor = $crawler->filter('.Normal')->each(function ($node) {
//            return $node->text();
//        });
//        if (!empty($listAuthor)){
//            $sizeAuthor = count($listAuthor);
//            $author = $listAuthor[$sizeAuthor - 1];
//        }

        ///data
        $checkTitle = Article::select('tittle')->where('tittle', $title)->first();
        if (!$checkTitle && $title) {
            $dataPost = [
                'tittle' => $title,
                'contents' => $contentArticle,
                'description' => $description,
                'author' => $author,
                'date' => $date,
                'id_category' => $idCate,
                'image' => $image,
                'slug' => Str::slug($title)
            ];

            Article::create($dataPost);
        }

    }

    protected function crawlData(string $type, $crawler)
    {
        $result = $crawler->filter($type)->each(function ($node) {
            return $node->text();
        });

        if(!empty($result)) {
            return $result[0];
        }

        return '';
    }

    protected function crawlDataHtml(string $type, $crawler)
    {
        $result = $crawler->filter($type)->each(function ($node) {
            return $node->html();
        });

        if(!empty($result)) {
            return $result[0];
        }

        return '';
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