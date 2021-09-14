<div class="p-6">
    <div class="pb-5 mb-4">
        <h3 class="text-lg leading-6 font-medium text-gray-900">
            New Upwork RSS Feed
        </h3>
        <p class="mt-2 max-w-4xl text-sm text-gray-500">
            To create a new feed and begin loading new listings from Upwork,
            enter the RSS URL below. Give it a title, a color and an optional description. Ensure you use the RSS feed URL and not
            the Atom feed URL.
        </p>
    </div>

    <form wire:submit.prevent="create" class="space-y-6" action="#" method="POST">
        <x-input.field wire:model.defer="title" id="title" label="Title" required autofocus />

        <x-input.field wire:model.defer="url" id="url" label="Upwork RSS URL" required />

        <x-input.field wire:model.defer="description" type="textarea" id="description" label="Description" />

        <div class="flex items-center justify-between">
            <div class="w-full">
                <x-input.label label="Select Status Color" for="color" />

                <div
                    x-data="{
                        open: false,
                        color: 'Black',
                        colorId: @entangle('color').defer,
                    }"
                    @keydown.window.escape="open = false"
                    @click.away="open = false"
                    class="mt-2 relative inline-block text-left w-56"
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
                                    <span class="w-4 h-4 rounded-full" :class="colorId"></span>

                                    <span class="flex-1 flex flex-col min-w-0">
                                        <span class="text-gray-900 text-sm font-medium truncate" x-text="color"></span>
                                    </span>
                                </span>

                                <x-heroicon-s-selector class="text-gray-400 group-hover:text-gray-500"/>
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
                        <div class="py-1" role="none">
                            @foreach ($feedColors as $id => $color)
                                <a
                                    @click="color = '{{ $color }}'; colorId = '{{ $id }}'; open = ! open"
                                    href="#"
                                    class="group flex items-center px-3 py-2 text-sm font-medium text-gray-700 rounded-md hover:text-gray-900 hover:bg-gray-50"
                                >
                                    <span class="w-3 h-3 mr-4 {{ $id }} rounded-full" aria-hidden="true"></span>
                                    <span class="truncate">
                                        {{ $color }}
                                    </span>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
                @error('color') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
            </div>
        </div>

        <div>
            <x-button type="submit">
                <span wire:loading.remove>
                    Create Feed
                </span>

                <span wire:loading>
                    Creating feed...
                </span>
            </x-button>
        </div>
    </form>
</div>