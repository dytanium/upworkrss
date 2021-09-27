<x-layouts.base>
    <div class="relative h-screen flex overflow-hidden bg-white">

        <livewire:user.sidebar />

        <div class="flex flex-col w-0 flex-1 overflow-hidden">

            <livewire:user.search />

            {{-- clean this up! --}}
            <main x-data @paginationchange.window="$refs.listings.scrollTop = 0"
                x-ref="listings" class="flex-1 relative z-0 overflow-y-auto focus:outline-none">

                @include('components.message')

                {{ $slot }}
            </main>
        </div>

        <x-notification />
    </div>
</x-layouts.base>




