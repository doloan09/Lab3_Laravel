<?php

namespace App\Console\Commands;

use App\Http\Controllers\CustomCrawlerController;
use App\Observers\CustomCrawlerObserver;
use Illuminate\Console\Command;
use Spatie\Crawler\Crawler;
use GuzzleHttp\RequestOptions;
use Spatie\Crawler\CrawlProfiles\CrawlInternalUrls;

class ScrapeArticle extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'scrape:article {url}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Scrape Article';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        Crawler::create([RequestOptions::ALLOW_REDIRECTS => true, RequestOptions::TIMEOUT => 30])
            ->acceptNofollowLinks()
            ->ignoreRobots()
            ->setCurrentCrawlLimit(1)
            ->setParseableMimeTypes(['text/html', 'text/plain'])
            ->setCrawlObserver(new CustomCrawlerObserver())
            ->setCrawlProfile(new CrawlInternalUrls($this->argument('url')))
            ->setMaximumResponseSize(1024 * 1024 * 2) // 2 MB maximum
            ->setTotalCrawlLimit(100) // limit defines the maximal count of URLs to crawl
            ->setConcurrency(1) // all urls will be crawled one by one
            ->setDelayBetweenRequests(100)
            ->startCrawling($this->argument('url'));

    }
}
