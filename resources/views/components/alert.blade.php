@props([
    'type' => null,
    'message' => null
])

@if ($type)
    @php $attributes = $attributes->merge(['class' => $type]) @endphp
@endif

@if ($message)
    <div {{ $attributes->merge(['class' => 'notification']) }}>
        {{ $message ?? $slot }}
    </div>
@endif
