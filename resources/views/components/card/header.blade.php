@props([
    'title' => null,
    'subtitle' => null
])

<header class="card-header">
    <h2 class="title">
        {{ $title ?? $slot }}
    </h2>

    @if (!empty($subtitle))
        <p class="subtitle">
            {{ $subtitle }}
        </p>
    @endif
</header>
