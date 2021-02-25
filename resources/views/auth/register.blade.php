@extends('layouts.app')

@section('content')
    <x-layout.container>
        <x-layout.compact>
            <div class="card">
                <x-card.header title="{{ __('Register') }}" />

                <div class="card-content">
                    <form method="post" action="{{ route('register') }}" class="form">
                        @csrf

                        <div class="field">
                            <x-form.label
                                text="{{ __('Name') }}"
                                for="form-name"
                            />

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

                        <div class="field">
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

                        <div class="field">
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

                        <div class="field">
                            <x-form.label
                                text="{{ __('Password confirmation') }}"
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

                        <x-button
                            text="{{ __('Sign up') }}"
                            class="is-primary"
                        />
                    </form>
                </div>
            </div>

            <div class="mt-2">
                {{ __('Already registered?') }}

                <a href="{{ route('login') }}">
                    {{ __('Login') }}
                </a>
            </div>
        </x-layout.compact>
    </x-layout.container>
@endsection
