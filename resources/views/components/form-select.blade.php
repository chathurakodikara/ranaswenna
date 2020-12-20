@props(['disabled' => false])
<select {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'form-select rounded block w-full mt-1']) !!}>
    {{ $slot }}
</select>
