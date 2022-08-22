<?php
namespace App\Observers;

use App\Models\Category;
use DOMDocument;
use Illuminate\Support\Str;
use Spatie\Crawler\CrawlObservers\CrawlObserver;
use Psr\Http\Message\UriInterface;
use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Support\Facades\Log;
use Symfony\Component\DomCrawler\Crawler;

class CrawlerCategoryObserver extends CrawlObserver {

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

        $ca = $crawler->filter("#wrap-main-nav > nav > ul > li");

        foreach ($ca as $a) {
            $cate = Category::where('name', mb_convert_encoding($a->textContent, "ISO-8859-1", "UTF-8"))->first();
            $slug = Str::slug(mb_convert_encoding($a->textContent, "ISO-8859-1", "UTF-8"));

            if (!$cate && $slug && $slug != 'tat-ca'){
                Category::create([
                    'name' => mb_convert_encoding($a->textContent, "ISO-8859-1", "UTF-8"),
                    'slug' => $slug
                ]);
            }
        }
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
