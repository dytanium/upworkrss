<?php

namespace App\Actions;

use App\Models\Feed;
use App\Models\Listing;
use Vedmant\FeedReader\Facades\FeedReader;

class FetchFeedListings
{
    public Feed $feed;

    public function fetch(): Feed
    {
        $feedReader = FeedReader::read($this->feed->url);

        foreach($feedReader->get_items() as $listing) {
            $parsedListing = (new ParseFeedListing($listing))->parse();

            Listing::createFromParsedFeedListing($parsedListing, $this->feed);
        }

        $this->feed->update([
            'checked_at' => now(),
        ]);

        return $this->feed;
    }

    public function __construct(Feed $feed)
    {
        $this->feed = $feed;
    }
}