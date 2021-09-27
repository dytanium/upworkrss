<?php

namespace App\Http\Livewire\Feed;

use App\Models\Feed;
use Livewire\Component;

class View extends Component
{
    public Feed $feed;

    public function mount(Feed $feed)
    {
        $this->feed = $feed;
    }

    public function render()
    {
        return view('livewire.feed.view');
    }
}
