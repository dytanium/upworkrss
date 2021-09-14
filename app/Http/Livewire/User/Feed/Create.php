<?php

namespace App\Http\Livewire\User\Feed;

use App\Models\Feed;
use Livewire\Component;

class Create extends Component
{
    public $title;
    public $url;
    public $description;
    public $color = 'bg-black';

    protected $rules = [
        'title' => 'required|max:255',
        'url' => 'required|max:255|url',
        'description' => 'nullable',
        'color' => 'required',
    ];

    public function create()
    {
        $feedData = $this->validate();

        $feed = auth()->user()->feeds()->create([
            'title' => $feedData['title'],
            'url' => $feedData['url'],
            'description' => $feedData['description'],
            'color' => $feedData['color'],
        ]);

        session()->flash('message', "New feed '{$feed->title}' has been created.");

        return redirect()->route('dashboard');
    }

    public function render()
    {
        return view('livewire.user.feed.create', [
            'feedColors' => Feed::colors(),
        ]);
    }
}
