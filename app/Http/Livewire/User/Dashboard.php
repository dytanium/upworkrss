<?php

namespace App\Http\Livewire\User;

use App\Models\Listing;
use Livewire\Component;

class Dashboard extends Component
{
    public $showListingModal = false;
    public Listing $viewListing;

    public function delete(Listing $listing)
    {
        $listing->update([
            'status' => Listing::STATUS_DELETED,
        ]);
    }

    public function showListing(Listing $listing)
    {
        $this->viewListing = $listing;

        $this->showListingModal = true;
    }

    public function render()
    {
        $listings = Listing::where('user_id', auth()->user()->id)->where('status', Listing::STATUS_NEW)->orderBy('local_datetime', 'desc')->get();

        return view('livewire.user.dashboard', [
            'listings' => $listings,
        ]);
    }

    public function mount()
    {
        $this->viewListing = Listing::make();
    }
}
