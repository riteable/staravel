@props([
    'disabled' => false,
    'checked' => false,
    'text' => null
])

<label class="checkbox">
    <input type="checkbox" {{ $disabled ? 'disabled' : '' }} {{ $checked ? 'checked' : '' }} {{ $attributes->merge(['value' => '1']) }}>

    {{ $text ?? $slot }}
</label>
