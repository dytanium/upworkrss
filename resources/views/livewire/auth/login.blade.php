<div>
    <form wire:submit.prevent="login" class="space-y-6" action="#" method="POST">

        <x-input.field wire:model.defer="email" id="email" type="email" label="Email Address" required autofocus />

        <x-input.field wire:model.defer="password" id="password" type="password" label="Password" required />

        <div class="flex items-center justify-between">
            <div class="flex items-center">
                <x-input.checkbox wire:model.defer="rememberMe" id="remember-me" />

                <x-input.label class="ml-2" for="remember-me" label="Remember Me" />
            </div>

            <div class="text-sm">
                <x-link href="{{ route('password.request') }}">Forgot your password?</x-link>
            </div>
        </div>

        <div>
            <x-button type="submit" class="w-full">
                <span wire:loading.remove>
                    Log In
                </span>

                <span wire:loading>
                    <x-heroicon-o-refresh class="animate-spin mr-2"/>Verifying Identity...
                </span>
            </x-button>
        </div>
    </form>

    <div class="mt-6">
        <p class="mt-2 text-center text-sm">
            <x-link href="{{ route('register') }}">Haven't signed up yet?</x-link>
        </p>
    </div>
</div>