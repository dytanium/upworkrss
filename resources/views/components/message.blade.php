@if (session()->has('message'))
    <div
        x-data="{
            show: true,
        }"
    >
        <div
            x-show="show"
            class="rounded-md bg-green-50 p-4"
        >
            <div class="flex">
                <div class="flex-shrink-0">
                    <x-heroicon-s-check-circle class="text-green-400"/>
                </div>

                <div class="ml-3">
                    <p class="text-sm font-medium text-green-800">
                        {{ session('message') }}
                    </p>
                </div>

                <div class="ml-auto pl-3">
                    <div class="-mx-1.5 -my-1.5">
                        <button
                            @click="show = false"
                            type="button" class="inline-flex bg-green-50 rounded-md p-1.5 text-green-500 hover:bg-green-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-green-50 focus:ring-green-600">
                            <span class="sr-only">Dismiss</span>

                            <x-heroicon-s-x/>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif