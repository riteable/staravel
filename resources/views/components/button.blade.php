@props(['text'])

<button {{ $attributes->merge(['class' => 'btn']) }}>
    {{ $text ?? $slot }}
</button>
