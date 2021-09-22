<?php

namespace App\Http\Livewire\User;

use App\Models\Feed;
use App\Models\Listing;
use Livewire\Component;
use App\Actions\FeedParser;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Vedmant\FeedReader\Facades\FeedReader;

class Sidebar extends Component
{
    public function logout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login');
    }

    public function refresh(Feed $feed)
    {
        $feedReader = FeedReader::read($feed->url);

        foreach($feedReader->get_items() as $listing) {
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
        }

        $feed->update([
            'checked_at' => now(),
        ]);
    }

    public function render()
    {
        return view('livewire.user.sidebar', [
            'feeds' => auth()->user()->feeds,
        ]);
    }
}
