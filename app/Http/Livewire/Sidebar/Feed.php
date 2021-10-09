<?php

namespace App\Http\Livewire\Sidebar;

use Livewire\Component;
use App\Models\Feed as RssFeed;
use App\Actions\FetchFeedListings;

class Feed extends Component
{
    public RssFeed $feed;

    protected $listeners = [
        'feed:refresh' => '$refresh',
    ];

    public function refresh(RssFeed $feed)
    {
        $this->feed->fetchListings()->fresh();

        $this->emit('feed:refresh');
    }

    public function mount(RssFeed $feed)
    {
        $this->feed = $feed;
    }

    public function render()
    {
        return view('livewire.sidebar.feed');
    }
}
