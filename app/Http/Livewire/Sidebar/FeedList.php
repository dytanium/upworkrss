<?php

namespace App\Http\Livewire\Sidebar;

use Livewire\Component;

class FeedList extends Component
{
    public $feeds;

    public function mount()
    {
        $this->feeds = auth()->user()->feeds;
    }

    public function render()
    {
        return view('livewire.sidebar.feed-list');
    }
}
