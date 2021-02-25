@props([
    'title' => null,
    'icon' => null
])

<header class="card-header">
    <h2 class="card-header-title @if ($icon) has-icon-left @endif">
        @if ($icon)
            <x-icon name="{{ $icon }}" size="20" />
        @endif
        {{ $title ?? $slot }}
    </h2>
</header>
