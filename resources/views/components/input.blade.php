@props(['formatted' => isset($name) ? str_replace(']', '', str_replace('[', '.', $name)) : false])

<div>
<input {{ $attributes->merge(['class' => "input" . ($errors->has($formatted) ? ' is-border-danger' : '')]) }} value="{{ $value ?? old($formatted) }}">
@error($formatted)
    <span class="inline-block uppercase text-danger text-[12px] pl-2 mt-1" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
</div>
