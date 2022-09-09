@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-base text-gray-600']) }}>
    {{ $value ?? $slot }}
</label>
