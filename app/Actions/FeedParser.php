<?php

namespace App\Actions;

class FeedParser
{
    public string $listingContent = '';

    public function parse()
    {
        $properties = [
            'budget' => null,
        ];

        $fixedBudget = $this->between('<b>Budget</b>:');

        $hourlyBudget = $this->between('<b>Hourly Range</b>:');

        $properties['category'] = $this->between('<b>Category</b>:');

        $properties['country'] = $this->between('<b>Country</b>:');

        $properties['description'] = $this->parseDescription();

        $properties['skills'] = array_map('trim', explode(',', $this->between('<b>Skills</b>')));

        if ($fixedBudget) {
            $properties['budget'] = ['type' => 'fixed', 'rate' => $fixedBudget];
        } elseif ($hourlyBudget) {
            $properties['budget'] = ['type' => 'hourly', 'rate' => $hourlyBudget];
        }

        return $properties;
    }

    public function parseDescription()
    {
        $endPos = strpos($this->listingContent, '<b>Posted On</b>');

        return trim(substr($this->listingContent, 0, $endPos));
    }

    public function __construct($listingContent)
    {
        $this->listingContent = $listingContent;
    }

    private function between($haystack)
    {
        if ($start = strpos($this->listingContent, $haystack)) {
            $start += strlen($haystack) + 1;
            $endPos = strpos($this->listingContent, '<br', $start);

            return trim(substr($this->listingContent, $start, ($endPos - $start)));
        }
    }
}