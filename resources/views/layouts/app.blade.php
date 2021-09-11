<x-layouts.base>
    <div class="relative h-screen flex overflow-hidden bg-white">

        <livewire:user.sidebar />

        <div class="flex flex-col w-0 flex-1 overflow-hidden">

            <livewire:user.search />

            <main class="flex-1 relative z-0 overflow-y-auto focus:outline-none">
                {{ $slot }}
            </main>
        </div>
    </div>
</x-layouts.base>




