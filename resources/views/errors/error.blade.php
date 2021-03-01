@extends('layouts.app')

@section('content')
    <x-layout.container>
        <div class="has-text-centered">
            <x-icon name="heroicon-s-exclamation-circle" size="48" class="has-text-danger" />

            <div class="has-text-muted mb-4">
                @yield('code', '500')
            </div>

            <h2 class="title">
                @yield('title', __('Unknown error'))
            </h2>

            <p class="subtitle">
                @yield('message', __('An unknown error has occurred.'))
            </p>

            <a href="/" class="button">
                {{ __('Return home') }}
            </a>
        </div>
    </x-layout.container>
@endsection
