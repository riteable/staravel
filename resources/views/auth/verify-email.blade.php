@extends('layouts.app')

@section('content')
    <x-layout.container>
        <x-layout.compact>
            @if (session('status') === 'verification-link-sent')
                <x-alert
                    message="{{ __('A new email verification link has been emailed to you!') }}"
                    type="is-success"
                    class="mb-2"
                />
            @endif

            <div class="has-text-centered">
                <x-icon name="heroicon-s-mail" size="48" />

                <h2 class="title">
                    {{ __('Verify email') }}
                </h2>

                <p class="mb-4">
                    {{ __('Click the link in the email we\'ve just sent you to verify your email address.') }}
                </p>

                <div class="is-flex is-justify-content-center">
                    <a href="/" class="button is-primary">
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
