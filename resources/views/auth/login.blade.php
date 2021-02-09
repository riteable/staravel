@extends('layouts.app')

@section('content')
    <x-layout.container>
        <x-alert message="{{ $errors->first() }}" type="error" />

        <form method="post" action="{{ route('login') }}">
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
                />
            </div>

            <div class="form-group">
                <div class="d-flex space-between align-center">
                    <x-form.label
                        text="{{ __('Password') }}"
                        for="form-password"
                    />

                    <div>
                        <a href="/auth/forgot-password">
                            {{ __('Forgot password?') }}
                        </a>
                    </div>
                </div>

                <x-form.input
                    id="form-password"
                    type="password"
                    name="password"
                    autocomplete="password"
                    placeholder="..."
                    required
                />
            </div>

            <div class="form-group">
                <x-form.label>
                    <x-form.checkbox
                        id="form-remember"
                        name="remember"
                        checked="{{ old('remember') }}"
                    />

                    {{ __('Remember me') }}
                </x-form.label>
            </div>

            <div class="d-flex space-between align-center">
                <x-button text="{{ __('Login') }}" />

                <span>
                    {{ __('Not registered?') }}

                    <a href="{{ route('register') }}">
                        {{ __('Register') }}
                    </a>
                </span>
            </div>
        </form>
    </x-layout.container>
@endsection
