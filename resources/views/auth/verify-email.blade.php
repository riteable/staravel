@extends('layouts.app')

@section('content')
    <x-layout.container>
        <div class="text-center">
            <x-heroicon-s-mail class="icon icon-48" />

            <h2 class="title">
                {{ __('Verify email') }}
            </h2>

            <p class="subtitle">
                {{ __('Just one more little thing') }}
            </p>

            <p>
                {{ __('Click the link in the email we\'ve just sent you to verify your email address.') }}
            </p>

            <a href="/" class="btn">
                {{ __('Return home') }}
            </a>
        </div>
    </x-layout.container>
@endsection
