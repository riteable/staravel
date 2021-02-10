@extends('layouts.app')

@section('content')
    <x-layout.container>
        <div class="columns justify-center">
            <div class="column col-6">
                <div class="card">
                    <x-card.header
                        title="{{ __('Reset password') }}"
                        subtitle="{{ __('Set a new password') }}"
                    />

                    <div class="card-body">
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
                                    has-errors="{{ $errors->has('email') }}"
                                    autocomplete="email"
                                    placeholder="@"
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
                                    has-errors="{{ $errors->has('password') }}"
                                    autocomplete="new-password"
                                    placeholder="..."
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
                                    autocomplete="new-password"
                                    placeholder="..."
                                    required
                                />
                            </div>

                            <x-button text="{{ __('Reset password') }}" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </x-layout.container>
@endsection
