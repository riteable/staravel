@extends('layouts.app')

@section('content')
    <x-layout.container>
        <x-layout.compact>
            <x-alert
                :message="$errors->first()"
                type="is-danger"
                class="mb-2"
            />

            <div class="card">
                <x-card.header
                    title="{{ __('Login') }}"
                    icon="heroicon-o-login"
                />

                <div class="card-content">
                    <form method="post" action="{{ route('login') }}" class="form">
                        @csrf

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
                                required
                            />
                        </div>

                        <div class="field">
                            <div class="is-flex is-justify-content-space-between">
                                <x-form.label
                                    text="{{ __('Password') }}"
                                    for="form-password"
                                />

                                <a href="/forgot-password">
                                    {{ __('Forgot password?') }}
                                </a>
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

                        <div class="field">
                            <x-form.label>
                                <x-form.checkbox
                                    id="form-remember"
                                    name="remember"
                                    checked="{{ old('remember') }}"
                                />

                                {{ __('Remember me') }}
                            </x-form.label>
                        </div>

                        <x-button
                            text="{{ __('Login') }}"
                            class="is-primary"
                        />
                    </form>
                </div>
            </div>

            <div class="mt-4">
                {{ __('Not registered?') }}

                <a href="{{ route('register') }}">
                    {{ __('Register') }}
                </a>
            </div>
        </x-layout.compact>
    </x-layout.container>
@endsection
