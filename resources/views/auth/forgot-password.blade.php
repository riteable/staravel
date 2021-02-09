@extends('layouts.app')

@section('content')
    <x-layout.container>
        <p>
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </p>

        <x-alert message="{{ $errors->first() }}" type="error" />

        @if (session('status'))
          <x-alert message="{{ session('status') }}" type="success" />
        @endif

        <form method="post" action="{{ route('password.email') }}">
            @csrf

            <div class="form-group">
                <x-form.label
                    text="{{ __('Email') }}"
                    for="form-email"
                />

                <x-form.input
                    id="form-email"
                    type="email"
                    name="email"
                    value="{{ old('email') }}"
                    autocomplete="email"
                    placeholder="@"
                    required
                    autofocus
                />
            </div>

            <x-button text="{{ __('Send reset link') }}" />
        </form>
    </x-layout.container>
@endsection
