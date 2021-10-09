<div
    x-data="{
        refreshing: false,

        refreshFeeds: async function() {
            this.refreshing = true

            let result = await $wire.refreshAll()

            this.refreshing = false
        },
    }"
>
    <div class="flex items-center justify-between flex-wrap sm:flex-nowrap content-center">
        <h3 class="px-3 text-xs font-semibold text-gray-500 uppercase tracking-wider">
            Your Feeds
        </h3>

        <div>
            <button
                @click="refreshFeeds"
                class="text-xs text-blue-500 mr-2"
            >
                Refresh All
            </button>
        </div>
    </div>

    <div class="mt-1" role="group">
        <ul role="list" class="mt-3 grid grid-cols-1 gap-3 sm:gap-3">
            @forelse ($feeds as $feed)
                <livewire:sidebar.feed :feed="$feed" :wire:key="$feed->id">
            @empty
                <li class="col-span-1 ml-3 flex items-center text-sm">
                    <x-heroicon-o-emoji-sad class="inline text-red-600 mr-2"/>
                    No Feeds
                </li>
            @endforelse
        </ul>
    </div>

    <div class="flex items-center justify-end flex-wrap sm:flex-nowrap mt-2 mr-2">
        <a class="text-blue-500" href="{{ route('feed.create') }}">
            <x-heroicon-o-plus-sm/>
        </a>
    </div>
</div>