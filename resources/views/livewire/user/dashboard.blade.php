<div class="hidden mt-8 sm:block">
    <div class="align-middle inline-block min-w-full border-b border-gray-200">
        <table class="min-w-full">
            <thead>
                <tr class="border-t border-gray-200">
                    <th class="pr-2 py-3 border-b border-gray-200 bg-gray-50 text-right text-xs font-medium text-gray-500 uppercase tracking-wider"></th>
                    <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        <span class="lg:pl-2">Title</span>
                    </th>
                    <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Date/Time
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-100">
                @forelse ($listings as $listing)
                    <tr class="hover:bg-blue-50">
                        <td class="pr-2">
                            <div class="relative flex justify-end items-center">
                                <button
                                    type="button"
                                    class="w-8 h-8 inline-flex items-center justify-center text-gray-400 rounded-full hover:text-red-500 focus:outline-none ml-2"
                                >
                                    <x-heroicon-o-trash wire:click="delete({{ $listing->id }})" class="flex-shrink-0 transition duration-300 ease-in-out transform hover:scale-125"/>
                                </button>

                                <a href="{{ $listing->url }}" target="__blank">
                                    <button
                                        type="button"
                                        class="w-8 h-8 inline-flex items-center justify-center text-gray-400 rounded-full hover:text-blue-500 focus:outline-none ml-2"
                                    >
                                        <x-heroicon-o-external-link class="flex-shrink-0 transition duration-300 ease-in-out transform hover:scale-125"/>
                                    </button>
                                </a>
                            </div>
                        </td>
                        <td class="pr-6 pl-0 py-3 max-w-0 w-full whitespace-nowrap text-sm font-medium text-gray-900">
                            <div class="flex items-center space-x-3 lg:pl-2">
                                <div class="flex-shrink-0 w-2.5 h-2.5 rounded-full {{ $listing->feed->color }}" aria-hidden="true"></div>
                                <a wire:click.prevent="showListing({{ $listing->id }})" href="#" class="truncate hover:text-gray-600">
                                    <p>
                                        {{ $listing->title }}
                                    </p>
                                    <p class="text-sm text-gray-500 truncate">{{ $listing->description }}</p>
                                </a>
                            </div>
                        </td>
                        <td class="hidden md:table-cell px-6 py-3 whitespace-nowrap text-sm text-gray-500 text-right">
                            {{ $listing->local_datetime->diffForHumans() }}
                        </td>

                    </tr>
                @empty
                    <tr>
                        <td colspan="3">OH NO!!!</td>
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
               {{ $viewListing->description }}
            </x-slot>

            <x-slot name="footer">
                <x-button wire:click="$set('showListingModal', false)">Close</x-button>

                {{-- <x-button.primary type="submit">Save</x-button.primary> --}}
            </x-slot>
        </x-modal.dialog>
    </form>
</div>