<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\Listing;
use Livewire\Component;
use Illuminate\Database\Eloquent\Builder;
use App\Http\Livewire\DataTable\WithSorting;
use App\Http\Livewire\DataTable\WithBulkActions;
use App\Http\Livewire\DataTable\WithPerPagePagination;

class Dashboard extends Component
{
    use WithBulkActions, WithPerPagePagination, WithSorting;

    public bool $showListingModal = false;

    public Listing $viewListing;

    public $filters = [
        'search' => '',
        'feed' => '',
        'status' => Listing::STATUS_NEW,
    ];

    protected $listeners = [
        'feed:refresh' => '$refresh',
        'filterStatus' => 'setStatusFilter',
    ];

    public function setStatusFilter($status)
    {
        $this->filters['status'] = $status;
    }

    public function archiveSelected()
    {
        $this->selectedRowsQuery->get()->map->markAs(Listing::STATUS_ARCHIVED);

        $this->resetSelected();

        $this->emit('listing:refresh');
    }

    public function deleteSelected()
    {
        $this->selectedRowsQuery->get()->map->markAs(Listing::STATUS_DELETED);

        $this->resetSelected();

        $this->emit('listing:refresh');
    }

    public function updatedFilters()
    {
        $this->resetPage();

        $this->dispatchBrowserEvent('pagination-change');
    }

    public function visit(Listing $listing)
    {
        $listing->markAs(Listing::STATUS_VISITED);

        $this->emit('listing:refresh');
    }

    public function delete(Listing $listing)
    {
        $listing->markAs(Listing::STATUS_DELETED);

        return $this->emit('listing:refresh');
    }

    public function archive(Listing $listing)
    {
        $listing->markAs(Listing::STATUS_ARCHIVED);

        $this->emit('listing:refresh');
    }

    public function getRowsQueryProperty(): Builder
    {
        $query = Listing::query()
            ->where('user_id', auth()->user()->id)
            ->where('status', $this->filters['status'])

            ->when($this->filters['feed'], fn($query, $feedId) => $query->where('feed_id', $feedId))
            ->when($this->filters['search'], fn($query, $search) => $query->where('title', 'like', '%' . $search . '%'))

            ->orderBy('local_datetime', 'desc');

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
