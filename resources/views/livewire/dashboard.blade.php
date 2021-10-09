<div class="block">
    <div class="align-middle inline-block min-w-full border-b border-gray-200">

        @include('components.dashboard.search')

        <table class="min-w-full">
            <tbody class="bg-white divide-y divide-gray-100">
                @forelse ($listings as $listing)
                    <tr
                        wire:loading.class.delay.long="opacity-50"
                        class="hover:bg-blue-50"
                    >
                        <td class="pl-4">
                            <x-input.checkbox wire:model="selected" value="{{ $listing->id }}" />
                        </td>
                        <td class="pr-2">
                            <div class="flex justify-end items-center">

                                {{-- delete --}}
                                <button
                                    type="button"
                                    class="w-8 h-8 inline-flex items-center justify-center text-gray-400 rounded-full hover:text-red-500 focus:outline-none ml-2"
                                >
                                    <x-heroicon-o-trash wire:click="delete({{ $listing->id }})" class="flex-shrink-0 w-6 h-6"/>
                                </button>

                                {{-- archive --}}
                                @if ($filters['status'] !== 'archived')
                                    <button
                                        type="button"
                                        class="w-8 h-8 inline-flex items-center justify-center text-gray-400 rounded-full hover:text-blue-500 focus:outline-none"
                                    >
                                        <x-heroicon-o-archive wire:click="archive({{ $listing->id }})" class="flex-shrink-0 w-6 h-6"/>
                                    </button>
                                @endif

                                {{-- visit --}}
                                @if ($filters['status'] !== 'new')
                                    <a wire:click="visit({{ $listing->id }})" href="{{ $listing->url }}" target="__blank">
                                        <button
                                            type="button"
                                            class="w-8 h-8 inline-flex items-center justify-center text-gray-400 rounded-full hover:text-green-500 focus:outline-none"
                                        >
                                            <x-heroicon-o-external-link class="flex-shrink-0 w-6 h-6"/>
                                        </button>
                                    </a>
                                @endif
                            </div>
                        </td>
                        <td class="pr-6 pl-0 py-2 max-w-0 w-full whitespace-nowrap text-sm font-medium text-gray-900">
                            <div class="flex items-center space-x-3 lg:pl-2">
                                <div class="flex-shrink-0 w-2.5 h-2.5 rounded-full {{ $listing->feed->color }}" aria-hidden="true"></div>

                                <a wire:click.prevent="showListing({{ $listing->id }})" href="#" class="truncate hover:text-gray-600">
                                    {{ $listing->title }}

                                    <p class="text-sm text-gray-500 truncate">{{ strip_tags($listing->description) }}</p>

                                    <p class="text-sm mt-1">
                                        @if (isset($listing->budget['type']) && $listing->budget['type'] === 'fixed')
                                            <x-badge color="dark-green">
                                                Fixed: {{ $listing->budget['rate'] }}
                                            </x-badge>
                                        @elseif (isset($listing->budget['type']) && $listing->budget['type'] === 'hourly')
                                            <x-badge color="green">
                                                Hourly: {{ $listing->budget['rate'] }}
                                            </x-badge>
                                        @endif

                                        <x-badge color="indigo">
                                            {{ $listing->category }}
                                        </x-badge>

                                        <x-badge color="yellow">
                                            {{ $listing->country }}
                                        </x-badge>

                                        @foreach ($listing->skills as $skill)
                                            <x-badge>
                                                {{ $skill }}
                                            </x-badge>
                                        @endforeach
                                    </p>
                                </a>
                            </div>
                        </td>
                        <td class="hidden md:table-cell px-6 py-2 whitespace-nowrap text-sm text-gray-500 text-right">
                            {{ $listing->local_datetime->diffForHumans() }}
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="py-5">
                            <div class="text-center">
                                <x-heroicon-o-inbox class="mx-auto h-12 w-12 text-gray-300"/>

                                <h3 class="mt-2 text-sm font-medium text-gray-900">No listings found.</h3>
                            </div>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    {{-- view listing modal --}}
    <form>
        <x-modal.dialog wire:model.defer="showListingModal">
            <x-slot name="title">{{ $viewListing->title }}</x-slot>

            <x-slot name="content">
                <x-badge color="green">
                    {{-- Posted {{ $viewListing->local_datetime->diffForHumans() }} ({{ $viewListing->local_datetime->format('F j, Y') }} --}}
                </x-badge>

                <p class="text-sm text-gray-800 mt-2">
                    {!! $viewListing->description !!}
                </p>

                <p class="text-sm">


                </p>


            </x-slot>

            <x-slot name="footer">
                <x-button wire:click="$set('showListingModal', false)">Close</x-button>

                {{-- <x-button.primary type="submit">Save</x-button.primary> --}}
            </x-slot>
        </x-modal.dialog>
    </form>
</div>