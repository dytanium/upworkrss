<div class="hidden lg:flex lg:flex-shrink-0">
    <div class="flex flex-col w-64 border-r border-gray-200 pt-6 pb-2 bg-gray-100">
        <div class="flex items-center flex-shrink-0 px-6 pb-4">
            <img class="mx-auto h-6 w-auto" src="/img/logo.svg" alt="UpworkRSS" />
        </div>

        <div class="h-0 flex-1 flex flex-col overflow-y-auto">
            <!-- User account dropdown -->
            <div
                x-data="{ open: false }"
                @keydown.window.escape="open = false"
                @click.away="open = false"
                class="px-3 mt-2 relative inline-block text-left"
            >
                <div>
                    <button
                        @click="open = ! open"
                        type="button"
                        class="group w-full bg-gray-100 rounded-md px-3.5 py-2 text-sm text-left font-medium text-gray-700 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-purple-500"
                        id="options-menu-button"
                        aria-expanded="false"
                        aria-haspopup="true"
                    >
                        <span class="flex w-full justify-between items-center">
                            <span class="flex min-w-0 items-center justify-between space-x-3">
                                <img class="w-10 h-10 bg-gray-300 rounded-full flex-shrink-0" src="{{ auth()->user()->avatarUrl() }}" alt="">

                                <span class="flex-1 flex flex-col min-w-0">
                                    <span class="text-gray-900 text-sm font-medium truncate">{{ auth()->user()->name }}</span>
                                    {{-- <span class="text-gray-500 text-sm truncate">----</span> --}}
                                </span>
                            </span>

                            <x-heroicon-s-selector class="flex-shrink-0 text-gray-400 group-hover:text-gray-500"/>
                        </span>
                    </button>
                </div>

                <div
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
                    {{-- <div class="py-1" role="none">
                        <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="options-menu-item-3">Get desktop app</a>
                        <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="options-menu-item-4">Support</a>
                    </div> --}}

                    <div class="py-1" role="none">
                        <a wire:click="logout" href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1">Logout</a>
                    </div>
                </div>
            </div>

            <!-- Navigation -->
            <nav class="px-3 mt-6">
                <div class="space-y-1">
                    <x-nav-link href="#" :active="request()->routeIs('dashboard')">
                        <x-heroicon-o-collection class="flex-shrink-0 text-gray-500 group-hover:text-gray-500 h-6 w-6 mr-3"/>
                        Listings
                    </x-nav-link>

                    <x-nav-link href="#" :active="request()->routeIs('todo')">
                        <x-heroicon-o-rss class="flex-shrink-0 text-gray-500 group-hover:text-gray-500 h-6 w-6 mr-3"/>
                        Feeds
                    </x-nav-link>

                    <x-nav-link href="#" :active="request()->routeIs('todo')">
                        <x-heroicon-o-briefcase class="flex-shrink-0 text-gray-500 group-hover:text-gray-500 h-6 w-6 mr-3"/>
                        Proposals
                    </x-nav-link>
                </div>

                <div class="mt-8">
                    <!-- feeds -->
                    <h3 class="px-3 text-xs font-semibold text-gray-500 uppercase tracking-wider">
                        Feed Legend
                    </h3>

                    <div class="mt-1 space-y-1" role="group">
                        @forelse ($feeds as $feed)
                            <a
                                href="#"
                                class="group flex items-center px-3 py-2 text-sm font-medium text-gray-700 rounded-md hover:text-gray-900 hover:bg-gray-50"
                            >
                                <span class="w-2.5 h-2.5 mr-4 {{ $feed->color }} rounded-full" aria-hidden="true"></span>
                                <span class="truncate">
                                    {{ $feed->title }}
                                </span>
                            </a>
                        @empty
                            <span class="text-red-400 text-sm ml-2">
                                <x-heroicon-o-emoji-sad class="flex-shrink-0 mr-1"/>
                                No feeds
                            </span>
                        @endforelse
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>