@props(['disabled' => false])
<textarea {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'form-textarea rounded block w-full mt-1']) !!}>{{ $slot }}</textarea>
