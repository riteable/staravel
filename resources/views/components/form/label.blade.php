@props(['text'])

<label {{ $attributes->merge(['class' => 'form-label']) }}>
    {{ $text ?? $slot }}
</label>
