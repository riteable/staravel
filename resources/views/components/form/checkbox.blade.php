@props([
    'disabled' => false,
    'checked' => false
])

<input type="checkbox" {{ $disabled ? 'disabled' : '' }} {{ $checked ? 'checked' : '' }} {{ $attributes->merge(['value' => '1']) }}>
<span class="form-icon"></span>
