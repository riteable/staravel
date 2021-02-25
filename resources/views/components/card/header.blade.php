@props([
    'title' => null
])

<header class="card-header">
    <h2 class="card-header-title">
        {{ $title ?? $slot }}
    </h2>
</header>
