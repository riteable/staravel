@extends('layouts.app')

@section('content')
    <x-layout.container>
        <x-layout.compact>
            <div class="card">
                <x-card.header
                    title="{{ __('Reset password') }}"
                    icon="heroicon-o-lock-open"
                />

                <div class="card-content">
                    <form method="post" action="{{ route('password.update') }}" class="form">
                        @csrf

                        <x-form.input
                            type="hidden"
                            name="token"
                            value="{{ $request->route('token') }}"
                        />

                        <div class="field">
                            <x-form.label
                                text="{{ __('Email') }}"
                                for="form-email"
                            />

                            <x-form.input
                                id="form-email"
                                type="email"
                                name="email"
                                value="{{ old('email', $request->email) }}"
                                has-errors="{{ $errors->has('email') }}"
                                autocomplete="email"
                                placeholder="@"
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
                                has-errors="{{ $errors->has('password') }}"
                                autocomplete="new-password"
                                placeholder="..."
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
                                autocomplete="new-password"
                                placeholder="..."
                                required
                            />
                        </div>

                        <x-button
                            text="{{ __('Reset password') }}"
                            class="is-primary"
                        />
                    </form>
                </div>
            </div>
        </x-layout.compact>
    </x-layout.container>
@endsection
