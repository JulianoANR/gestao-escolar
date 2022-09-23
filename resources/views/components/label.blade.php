@props(['value'])

<label {{ $attributes->merge(['class' => 'text-sm font-semibold pl-1 mt-4']) }}>
    {{ $value ?? $slot }}
</label>
