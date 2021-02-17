@extends('layouts.app')

@section('content')
    <x-layout.container>
        <x-layout.compact>
            @if (session('status') === 'verification-link-sent')
                <x-alert message="{{ __('A new email verification link has been emailed to you!') }}" type="success" />
            @endif

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

                <div class="d-flex justify-center">
                    <a href="/" class="btn btn-primary">
                        {{ __('Return home') }}
                    </a>

                    <form action="{{ route('verification.send') }}" method="post" class="ml-1">
                        @csrf
                        <x-button text="{{ __('Resend verification') }}" />
                    </form>
                </div>
            </div>
        </x-layout.compact>
    </x-layout.container>
@endsection
