@props([
    'type' => null,
    'message' => null
])

@if ($type)
    @php $attributes = $attributes->merge(['class' => "toast-{$type}"]) @endphp
@endif

@if ($message)
    <div {{ $attributes->merge(['class' => 'toast']) }}>
        {{ $message ?? $slot }}
    </div>
@endif
