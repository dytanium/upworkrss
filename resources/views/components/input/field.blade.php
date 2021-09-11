@props([
    'id' => null,
    'label' => null,
])

<div>
    <x-input.label for="{{ $id }}" label="{{ $label }}" />

    <div class="mt-1">
        <x-input.text {{ $attributes }} :hasError="$errors->has($id)" />
    </div>

    @error($id) <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
</div>