@props([
    'title' => null,
    'subtitle' => null
])

<header class="card-header">
    <h2 class="card-title h5">
        {{ $title ?? $slot }}
    </h2>

    @if (!empty($subtitle))
        <p class="card-subtitle text-gray">
            {{ $subtitle }}
        </p>
    @endif
</header>
