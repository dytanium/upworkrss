<?php

namespace App\Http\Livewire\User;

use App\Models\Listing;
use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Sidebar extends Component
{
    protected $listeners = [
        'feed:refresh' => '$refresh',
        'listing:refresh' => '$refresh',
    ];

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login');
    }

    public function render()
    {
        return view('livewire.sidebar', [
            'inboxCount' => Listing::where('user_id', auth()->user()->id)
                ->where('status', Listing::STATUS_NEW)
                ->count(),
            'archivesCount' => Listing::where('user_id', auth()->user()->id)
                ->where('status', Listing::STATUS_ARCHIVED)
                ->count(),
        ]);
    }
}
