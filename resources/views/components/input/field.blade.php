@props([
    'type' => 'text',
    'id' => null,
    'label' => null,
])

<div>
    <x-input.label for="{{ $id }}" label="{{ $label }}" />

    <div class="mt-1">
        @if ($type === 'text' || $type === 'email' || $type === 'password')
            <x-input.text {{ $attributes }} type="{{ $type }}" :hasError="$errors->has($id)" />
        @elseif ($type === 'textarea')
            <x-input.textarea {{ $attributes }} />
        @endif
    </div>

    @error($id) <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
</div>