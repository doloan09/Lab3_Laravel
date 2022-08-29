<?php

namespace App\Observers\Crawler;

use App\Models\Article;
use App\Models\Category;
use App\Models\CrawlerQueue;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Psr\Http\Message\UriInterface;
use Psr\Http\Message\ResponseInterface;
use Spatie\Crawler\CrawlObservers\CrawlObserver as SpatieCrawlObserver;
use Symfony\Component\DomCrawler\Crawler;


class ConsoleObserver extends SpatieCrawlObserver
{

    public function __construct(\Illuminate\Console\Command $console)
    {
        $this->console = $console;
    }

    /**
     * @param UriInterface $url
     */
    public function willCrawl(UriInterface $url): void
    {
        $this->console->comment("Found: {$url}");
    }

    /**
     * Called when the crawler has crawled the given url successfully.
     *
     * @param UriInterface $url
     * @param ResponseInterface $response
     * @param UriInterface|null $foundOnUrl
     */
    public function crawled(UriInterface $url, ResponseInterface $response, ?UriInterface $foundOnUrl = NULL): void
    {
        $this->console->total_crawled++;

        // item acabou de ser arquivado, mas não expirado.
//        $item = CrawlerQueue::onlyTrashed()->url($url)->first();
//        if ($item->count()) {
//            $item->html = (string)$response->getBody();
//            $item->save();
//        }

        $crawler = new Crawler((string)$response->getBody());

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
        Category::firstOrCreate([
            'name' => $category,
            'slug' => Str::slug($category)
        ]);

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
        if ($title) {
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

        $this->console->info("Crawled: ({$this->console->total_crawled}) {$url} ({$foundOnUrl})");
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
     * @param UriInterface $url
     * @param RequestException $requestException
     * @param UriInterface|null $foundOnUrl
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
        $this->console->info('Crawler: Finished');
    }
}
