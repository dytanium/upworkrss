<div class="sticky top-0 left-0 space-y-4 w-full">
    <div class="bg-gray-100 p-4 space-y-4">
        <div class="flex justify-between space-x-4">

            {{-- search box --}}
            <div class="flex-grow">
                <div class="flex rounded-md shadow-sm">
                    <div class="relative flex items-stretch flex-grow focus-within:z-10">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <x-heroicon-s-search class="text-gray-400"/>
                        </div>
                        <input
                            wire:model.debounce.300ms="filters.search"
                            type="text"
                            id="search"
                            class="focus:ring-indigo-500 focus:border-indigo-500 block w-full rounded-none rounded-l-md pl-10 sm:text-sm border-gray-300"
                            placeholder="Search Listings"
                        >
                    </div>
                    <button
                        wire:click="$set('filters.search', '')"
                        type="button"
                        class="group -ml-px relative inline-flex items-center space-x-2 px-4 py-2 border border-gray-300 border-l-0 text-sm font-medium rounded-r-md bg-white text-gray-700 focus:outline-none"
                    >
                        <x-heroicon-s-x class="text-gray-400 group-hover:text-gray-600"/>
                    </button>
                </div>

                {{-- <x-input.text wire:model.debounce.300ms="filters.search" placeholder="Search Listings" /> --}}
            </div>

            {{-- feed selector --}}
            <div class="flex space-x-2 items-center w-56">
                <div
                    x-data="{
                        open: false,
                        feedName: 'All Feeds',
                        feedId: @entangle('filters.feed'),
                        feedColor: 'bg-blue-800'
                    }"
                    @keydown.window.escape="open = false"
                    @click.away="open = false"
                    class="relative inline-block text-left w-56"
                >
                    <div>
                        <button
                            @click="open = ! open"
                            type="button"
                            class="group w-full bg-white rounded-md px-3.5 py-2 text-sm text-left font-medium text-gray-700 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-purple-500 border border-gray-300"
                            id="options-menu-button"
                            aria-expanded="false"
                            aria-haspopup="true"
                        >
                            <span class="flex w-full justify-between items-center">
                                <span class="flex min-w-0 items-center justify-between space-x-3">
                                    <span class="w-4 h-4 rounded-full" :class="feedColor"></span>

                                    <span class="flex-1 flex flex-col min-w-0">
                                        <span class="text-gray-900 text-sm font-medium truncate" x-text="feedName"></span>
                                    </span>
                                </span>

                                <x-heroicon-s-selector class="text-gray-400 group-hover:text-gray-500"/>
                            </span>
                        </button>
                    </div>

                    <div
                        x-cloak
                        x-show="open"
                        x-transition:enter="transition ease-out duration-100"
                        x-transition:enter-start="transform opacity-0 scale-95"
                        x-transition:enter-end="transform opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-75"
                        x-transition:leave-start="transform opacity-100 scale-100"
                        x-transition:leave-end="transform opacity-0 scale-95"
                        class="z-10 mx-3 origin-top absolute right-0 left-0 mt-1 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 divide-y divide-gray-200 focus:outline-none"
                        role="menu"
                        aria-orientation="vertical"
                        aria-labelledby="options-menu-button"
                        tabindex="-1"
                    >
                        <div class="py-1" role="none">
                            <a
                                @click="feedId = ''; feedColor = 'bg-blue-800'; feedName = 'All Feeds'; open = false"
                                href="#"
                                class="group flex items-center px-3 py-2 text-sm font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50 border-b border-gray-200"
                            >
                                <span class="w-3 h-3 mr-4 bg-blue-800 rounded-full" aria-hidden="true"></span>
                                <span class="truncate">
                                    All Feeds
                                </span>
                            </a>

                            @foreach (auth()->user()->feeds as $feed)
                                <a
                                    @click="feedId = '{{ $feed->id }}'; feedColor = '{{ $feed->color }}'; feedName = '{{ $feed->title }}'; open = false"
                                    href="#"
                                    class="group flex items-center px-3 py-2 text-sm font-medium text-gray-700 rounded-md hover:text-gray-900 hover:bg-gray-50"
                                >
                                    <span class="w-3 h-3 mr-4 {{ $feed->color }} rounded-full" aria-hidden="true"></span>
                                    <span class="truncate">
                                        {{ $feed->title }}
                                    </span>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            {{-- status --}}
            <div class="space-x-2 flex items-center">
                <x-input.label for="status" label="Show:"/>

                <x-input.select wire:model="filters.status" id="status">
                    <option value="new">Inbox</option>
                    <option value="archived">Archived</option>
                    <option value="visited">Visited</option>
                    <option value="deleted">Deleted</option>
                </x-input.select>
            </div>

            {{-- per page --}}
            <div class="space-x-2 flex items-center">
                <x-input.label for="perPage" label="Per Page:"/>

                <x-input.select wire:model="perPage" id="perPage">
                    <option value="10">10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                </x-input.select>
            </div>
        </div>

        {{-- bulk actions --}}
        <div class="flex justify-between items-center space-x-4">
            <div class="flex-shrink-0">
                <span class="relative z-0 inline-flex shadow-sm rounded-md sm:shadow-none sm:space-x-3">
                    <span class="inline-flex sm:shadow-sm">

                        {{-- select page --}}
                        <button
                            wire:click="$toggle('selectPage')"
                            type="button"
                            class="group relative inline-flex items-center px-4 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-900 hover:bg-gray-50 focus:z-10 focus:outline-none focus:ring-1 focus:ring-blue-600 focus:border-blue-600 disabled:opacity-50"
                            @if (! $listings->count()) disabled @endif
                        >
                            <x-heroicon-o-arrow-circle-down class="mr-2.5 h-5 w-5 text-gray-400 group-hover:text-gray-700"/>
                            <span>Select All</span>
                        </button>

                        {{-- trash --}}
                        <button
                            wire:click="deleteSelected"
                            type="button"
                            class="group hidden sm:inline-flex -ml-px relative items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-900 hover:bg-gray-50 focus:z-10 focus:outline-none focus:ring-1 focus:ring-blue-600 focus:border-blue-600 disabled:opacity-50"
                            @if (! count($selected)) disabled @endif
                        >
                            <x-heroicon-o-trash class="mr-2.5 h-5 w-5 text-gray-400 group-hover:text-red-500"/>
                            <span>Trash</span>
                        </button>

                        {{-- archive --}}
                        <button
                            wire:click="archiveSelected"
                            type="button"
                            class="group hidden sm:inline-flex -ml-px relative items-center px-4 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-900 hover:bg-gray-50 focus:z-10 focus:outline-none focus:ring-1 focus:ring-blue-600 focus:border-blue-600 disabled:opacity-50"
                            @if (! count($selected)) disabled @endif
                        >
                            <x-heroicon-o-archive class="mr-2.5 h-5 w-5 text-gray-400 group-hover:text-blue-500"/>
                            <span>Archive</span>
                        </button>
                    </span>
                </span>
            </div>

            {{-- selection status --}}
            <div class="flex-grow text-sm text-gray-600">
                @if ($selected)
                    <span wire:key="status-message">
                        @unless ($selectAll)
                            <div>
                                <span>
                                    Selected <strong>{{ count($selected) }}</strong> {{ Str::plural('listing', count($selected)) }}

                                    @if (count($selected) < $listings->total())
                                        <a href="#" wire:click.prevent="selectAll" class="ml-1 text-blue-400">
                                            Select all <strong>{{ $listings->total() }}</strong>
                                        </a>
                                    @endif
                                </span>
                                <span>
                                    |
                                    <a href="#" wire:click.prevent="resetSelected" class="ml-1 text-blue-400">
                                        Deselect
                                    </a>
                                </span>
                            </div>
                        @else
                            <span>Selected all <strong>{{ $listings->total() }}</strong> listings</span>
                            <span>
                                |
                                <a href="#" wire:click.prevent="resetSelected" class="ml-1 text-blue-400">
                                    Deselect
                                </a>
                            </span>
                        @endif
                    </span>
                @endif
            </div>

            {{-- pagination --}}
            <div class="flex-shrink-0 justify-self-end">
                {{ $listings->links() }}
            </div>
        </div>
    </div>
</div>
