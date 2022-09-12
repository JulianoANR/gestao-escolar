@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-base dark']) }}>
    {{ $value ?? $slot }}
</label>
