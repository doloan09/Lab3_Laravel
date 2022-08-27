<?php
namespace App\Observers;

use GuzzleHttp\RequestOptions;
use Spatie\Crawler\Crawler as Cr;
use Spatie\Crawler\CrawlObservers\CrawlObserver;
use Psr\Http\Message\UriInterface;
use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Support\Facades\Log;
use Spatie\Crawler\CrawlProfiles\CrawlInternalUrls;
use Symfony\Component\DomCrawler\Crawler;

class CrawlListTagInCategory extends CrawlObserver {

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
        $crawler = new Crawler((string)$response->getBody());

        $linkPost = $crawler->filter("nav.width_common ul.ul-nav-folder li a")->each(function ($node) {
            return $node->attr("href");
        });

        if ($linkPost) {
            foreach ($linkPost as $link) {
                $scheme = (string)$url->getScheme();
                $host = (string)$url->getHost();
                $linkPage = $scheme . "://" . $host . $link;
                print($linkPage . "\n");

                Cr::create([RequestOptions::ALLOW_REDIRECTS => true, RequestOptions::TIMEOUT => 30])
                    ->acceptNofollowLinks()
                    ->ignoreRobots()
                    ->setCurrentCrawlLimit(1)
//                        ->setParseableMimeTypes(['text/html', 'text/plain'])
                    ->setCrawlObserver(new CrawlListPageObserver())
                    ->setCrawlProfile(new CrawlInternalUrls($linkPage))
                    ->setMaximumResponseSize(1024 * 1024 * 2) // 2 MB maximum
                    ->setTotalCrawlLimit(100) // limit defines the maximal count of URLs to crawl
                    ->setConcurrency(1) // all urls will be crawled one by one
                    ->setDelayBetweenRequests(100)
                    ->startCrawling($linkPage);

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
