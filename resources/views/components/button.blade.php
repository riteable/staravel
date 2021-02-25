@props(['text'])

<button {{ $attributes->merge(['class' => 'button']) }}>
    {{ $text ?? $slot }}
</button>
