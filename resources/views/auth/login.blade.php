@extends('layouts.app')

@section('content')
    <x-layout.container>
        <div class="columns justify-center">
            <div class="column col-6">
                <x-alert message="{{ $errors->first() }}" type="error" />

                <div class="card">
                    <x-card.header
                        title="{{ __('Login') }}"
                        subtitle="{{ __('Sign in with an existing account') }}"
                    />

                    <div class="card-body">
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
                                        <a href="/forgot-password">
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

                            <x-button text="{{ __('Login') }}" />
                        </form>
                    </div>

                    <div class="card-footer">
                        {{ __('Not registered?') }}

                        <a href="{{ route('register') }}">
                            {{ __('Register') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </x-layout.container>
@endsection
