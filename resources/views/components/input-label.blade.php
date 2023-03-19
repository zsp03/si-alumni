@props(['value'])

<label {{ $attributes->merge(['class' => 'relative ml-2 font-medium text-sm text-gray-700']) }}>
    {{ $value ?? $slot }}
</label>
