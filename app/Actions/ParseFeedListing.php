<?php

namespace App\Actions;

use SimplePie_Item;
use Illuminate\Support\Str;

class ParseFeedListing
{
    public SimplePie_Item $listing;

    public string $content;

    public function parse(): array
    {
        $listing = [
            'url' => $this->listing->get_link(),
            'title' => Str::replace('&amp;amp;', '&', Str::replaceLast(' - Upwork', '', $this->listing->get_title())),
            'content' => $this->content,
            'local_datetime' => $this->listing->get_local_date(),
            'description' => $this->parseDescription(),
            'category' => $this->between('<b>Category</b>:'),
            'country' => $this->between('<b>Country</b>:'),
            'skills' => array_map('trim', explode(',', $this->between('<b>Skills</b>'))),
            'budget' => null,
        ];

        if ($fixedBudget = $this->between('<b>Budget</b>:')) {
            $listing['budget'] = ['type' => 'fixed', 'rate' => $fixedBudget];
        } elseif ($hourlyBudget = $this->between('<b>Hourly Range</b>:')) {
            $listing['budget'] = ['type' => 'hourly', 'rate' => $hourlyBudget];
        }

        return $listing;
    }

    public function parseDescription(): string
    {
        $endPos = strpos($this->content, '<b>Posted On</b>');

        return trim(substr(Str::replace('&amp;amp;', '&', $this->content), 0, $endPos));
    }

    public function __construct(SimplePie_Item $listing)
    {
        $this->listing = $listing;

        $this->content = $this->listing->get_content();
    }

    private function between($haystack)
    {
        if ($start = strpos($this->content, $haystack)) {
            $start += strlen($haystack) + 1;

            $endPos = strpos($this->content, '<br', $start);

            return trim(substr($this->content, $start, ($endPos - $start)));
        }
    }
}