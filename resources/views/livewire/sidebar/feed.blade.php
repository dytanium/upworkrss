<li class="col-span-1 flex shadow-sm rounded-md">
    <div class="flex-shrink-0 flex items-center justify-center w-6 {{ $feed->color }} text-white text-sm font-medium rounded-l-md">
    </div>

    <div class="flex-1 flex items-center justify-between border-t border-r border-b border-gray-200 bg-white rounded-r-md truncate">
        <div class="flex-1 px-4 py-2 pl-3 text-sm truncate">
            <a href="{{ route('feed.view', $feed) }}" class="text-gray-900 font-medium hover:text-gray-600">{{ $feed->title }}</a>

            {{-- poll every 10 minutes to update the 'checked' timestamp --}}
            <p wire:poll.keep-alive.600s class="text-gray-500 text-xs">Checked: {{ $feed->lastChecked() }}</p>
        </div>

        <div class="flex-shrink-0 pr-2">
            <button
                wire:click="refresh({{ $feed->id }})"
                type="button"
                class="w-8 h-8 bg-white inline-flex items-center justify-center text-gray-400 rounded-full bg-transparent hover:text-gray-500 focus:outline-none"
            >
                {{-- refresh button --}}
                <span
                    wire:loading.remove wire:target="refresh({{ $feed->id }})"
                    :class="refreshing ? 'animate-spin text-blue-600' : ''"
                >
                    <x-heroicon-o-refresh class="flex-shrink-0 inline"/>
                </span>

                <span wire:loading wire:target="refresh({{ $feed->id }})">
                    <x-heroicon-o-refresh class="flex-shrink-0 inline animate-spin text-blue-600"/>.
                </span>
            </button>
        </div>
    </div>
</li>