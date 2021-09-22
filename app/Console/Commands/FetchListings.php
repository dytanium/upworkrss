<?php

namespace App\Console\Commands;

use App\Models\Feed;
use App\Models\Listing;
use App\Actions\FeedParser;
use Illuminate\Support\Str;
use Illuminate\Console\Command;
use Vedmant\FeedReader\Facades\FeedReader;

class FetchListings extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'feed:fetch {feed}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fetch new listings from a feed';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $feed = Feed::find($this->argument('feed'));

        $this->info("Fetching new listings for: {$feed->title}...");

        $feedReader = FeedReader::read($feed->url);

        foreach($feedReader->get_items() as $listing) {

            $this->info("Parsing: {$listing->get_title()}...");

            $properties = (new FeedParser($listing->get_content()))->parse();

            $listing = $feed->listings()->firstOrcreate([
                'url' => $listing->get_link(),
            ], [
                'user_id' => $feed->user_id,
                'title' => Str::replaceLast(' - Upwork', '', $listing->get_title()),
                'content' => $listing->get_content(),
                'status' => Listing::STATUS_NEW,
                'local_datetime' => $listing->get_local_date(),
                'description' => $properties['description'],
                'budget' => $properties['budget'],
                'category' => $properties['category'],
                'country' => $properties['country'],
                'skills' => $properties['skills'],
            ]);

            $this->info("All done!");
        }

        return 0;
    }
}
