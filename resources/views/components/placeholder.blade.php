@props([
    'title',
    'message',
    'type' => 'muted',
    'icon' => 'heroicon-o-exclamation-circle'
])

<div class="has-text-centered">
    <x-icon name="{{ $icon }}" size="48" class="has-text-{{ $type }}" />

    <h2 class="title">
        {{ $title }}
    </h2>

    <p class="mb-4">
        {{ $message }}
    </p>

    <div class="is-flex is-justify-content-center">
        {{ $slot }}
    </div>
</div>
