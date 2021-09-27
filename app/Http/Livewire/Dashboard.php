<?php

namespace App\Http\Livewire;

use App\Models\Listing;
use Livewire\Component;
use Illuminate\Database\Eloquent\Builder;
use App\Http\Livewire\DataTable\WithSorting;
use App\Http\Livewire\DataTable\WithPerPagePagination;

// TODO: REFACTOR

class Dashboard extends Component
{
    use WithPerPagePagination, WithSorting;

    public bool $showListingModal = false;

    public Listing $viewListing;

    protected $listeners = ['feed:refresh' => '$refresh'];

    public function visit(Listing $listing): bool
    {
        return $listing->archive();
    }

    public function delete(Listing $listing): bool
    {
        return $listing->remove();
    }

    public function archive(Listing $listing): bool
    {
        return $listing->archive();
    }

    public function getRowsQueryProperty(): Builder
    {
        // $listings = Listing::where('user_id', auth()->user()->id)->where('status', Listing::STATUS_NEW)->orderBy('local_datetime', 'desc')->get();

        $query = Listing::query()
            ->where('user_id', auth()->user()->id)
            ->where('status', Listing::STATUS_NEW)

            ->orderBy('local_datetime', 'desc');
            // ->when($this->filters['status'], fn($query, $status) => $query->where('status', $status))
            // ->when($this->filters['amount-min'], fn($query, $amount) => $query->where('amount', '>=', $amount))
            // ->when($this->filters['amount-max'], fn($query, $amount) => $query->where('amount', '<=', $amount))
            // ->when($this->filters['date-min'], fn($query, $date) => $query->where('date', '>=', Carbon::parse($date)))
            // ->when($this->filters['date-max'], fn($query, $date) => $query->where('date', '<=', Carbon::parse($date)))
            // ->when($this->filters['search'], fn($query, $search) => $query->where('title', 'like', '%' . $search . '%'));

        return $this->applySorting($query);
    }

    public function getRowsProperty()
    {
        // return $this->cache(function () {
        return $this->applyPagination($this->rowsQuery);
        // });
    }



    public function showListing(Listing $listing)
    {
        $this->viewListing = $listing;

        $this->showListingModal = true;
    }

    public function render()
    {


        return view('livewire.dashboard', [
            'listings' => $this->rows,
        ]);
    }

    public function mount()
    {
        $this->viewListing = Listing::make();
    }
}
