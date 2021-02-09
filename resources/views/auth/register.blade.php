@extends('layouts.app')

@section('content')
    <x-layout.container>
        <form method="post" action="{{ route('register') }}">
            @csrf

            <div class="form-group">
                <x-form.label text="{{ __('Name') }}" for="form-name" />

                <x-form.input
                    id="form-name"
                    type="text"
                    name="name"
                    value="{{ old('name') }}"
                    autocomplete="name"
                    placeholder="..."
                    has-errors="{{ $errors->has('name') }}"
                    required
                    autofocus
                />

                <x-form.validation-message field="name" />
            </div>

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
                    has-errors="{{ $errors->has('email') }}"
                    required
                />

                <x-form.validation-message field="email" />
            </div>

            <div class="form-group">
                <x-form.label
                    text="{{ __('Password') }}"
                    for="form-password"
                />

                <x-form.input
                    id="form-password"
                    type="password"
                    name="password"
                    autocomplete="password"
                    placeholder="..."
                    has-errors="{{ $errors->has('password') }}"
                    required
                />

                <x-form.validation-message field="password" />
            </div>

            <div class="form-group">
                <x-form.label
                    text="{{ __('Confirm password') }}"
                    for="form-password-confirmation"
                />

                <x-form.input
                    id="form-password-confirmation"
                    type="password"
                    name="password_confirmation"
                    autocomplete="password"
                    placeholder="..."
                    required
                />
            </div>

            <div class="d-flex space-between align-center">
                <x-button text="{{ __('Register') }}" />

                <span>
                    {{ __('Already registered?') }}

                    <a href="{{ route('login') }}">
                        {{ __('Login') }}
                    </a>
                </span>
            </div>
        </form>
    </x-layout.container>
@endsection
