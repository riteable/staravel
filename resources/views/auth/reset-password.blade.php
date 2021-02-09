@extends('layouts.app')

@section('content')
    <x-layout.container>
        <x-alert message="{{ $errors->first() }}" type="error" />

        <form method="post" action="{{ route('password.update') }}">
            @csrf

            <x-form.input
                type="hidden"
                name="token"
                value="{{ $request->route('token') }}"
            />

            <div class="form-group">
                <x-form.label
                    text="{{ __('Email') }}"
                    for="form-email"
                />

                <x-form.input
                    id="form-email"
                    type="email"
                    name="email"
                    value="{{ old('email', $request->email) }}"
                    autocomplete="email"
                    placeholder="@"
                    required
                />
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
                    autocomplete="new-password"
                    placeholder="@"
                    required
                />
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
                    autocomplete="new-password"
                    placeholder="@"
                    required
                />
            </div>

            <x-button text="{{ __('Reset password') }}" />
        </form>
    </x-layout.container>
@endsection
