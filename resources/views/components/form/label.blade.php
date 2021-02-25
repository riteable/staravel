@props(['text'])

<label {{ $attributes->merge(['class' => 'label']) }}>
    {{ $text ?? $slot }}
</label>
