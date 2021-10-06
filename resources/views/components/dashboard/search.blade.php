<div class="sticky top-0 left-0 space-y-4 w-full">
    <div class="bg-gray-100 p-4 space-y-4">
        <div class="flex justify-between space-x-4">
            {{-- search box --}}
            <div class="flex-grow">
                <x-input.text wire:model.debounce.300ms="filters.search" placeholder="Search Listings" />
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
                                class="group flex items-center px-3 py-2 text-sm font-medium text-gray-700 rounded-md hover:text-gray-900 hover:bg-gray-50"
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
                    <option value="new">New Listings</option>
                    <option value="archived">Archived Listings</option>
                    <option value="visited">Visited Listings</option>
                    <option value="deleted">Deleted Listings</option>
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

                {{-- select all on page --}}
                <x-input.checkbox wire:model="selectPage" />

                @if (count($selected))
                    {{-- delete selected --}}
                    <button wire:click="deleteSelected" class="transition duration-300 ease-in-out transform hover:scale-125">
                        <x-heroicon-o-trash class="inline text-gray-400 hover:text-red-500 ml-3"/>
                    </button>

                    {{-- archive selected --}}
                    <button wire:click="archiveSelected" class="transition duration-300 ease-in-out transform hover:scale-125">
                        <x-heroicon-o-archive class="inline text-gray-400 hover:text-blue-500 ml-2"/>
                    </button>
                @endif
            </div>

            {{-- selection status --}}
            <div class="flex-grow text-sm text-gray-600">
                @if ($selected)
                    <span wire:key="row-message">
                        @unless ($selectAll)
                            <div>
                                <span>
                                    Selected <strong>{{ count($selected) }}</strong> {{ Str::plural('listing', count($selected)) }}
                                    <a href="#" wire:click.prevent="selectAll" class="ml-1 text-blue-400">
                                        Select all <strong>{{ $listings->total() }}</strong>
                                    </a>
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
