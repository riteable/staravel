@extends('layouts.app')

@section('content')
    <x-layout.container>
        <x-layout.compact>
            @if (session('status') === 'password-updated')
                <x-alert
                    message="{{ __('Your password has been updated!') }}"
                    type="is-success"
                />
            @endif

            <div class="card">
                <x-card.header
                    title="{{ __('Update password') }}"
                    icon="heroicon-o-lock-closed"
                />

                <div class="card-content">
                    <form method="post" action="{{ route('user-password.update') }}" class="form">
                        @csrf

                        {{ method_field('put') }}

                        <div class="field">
                            <x-form.label
                                for="form-current-password"
                                text="{{ __('Current password') }}"
                            />

                            <x-form.input
                                id="form-current-password"
                                type="password"
                                name="current_password"
                                autocomplete="password"
                                has-errors="{{ $errors->updatePassword->has('current_password') }}"
                                placeholder="..."
                                required
                            />

                            <x-form.validation-message
                                field="current_password"
                                bag="updatePassword"
                            />
                        </div>

                        <div class="field">
                            <x-form.label
                                for="form-password"
                                text="{{ __('New password') }}"
                            />

                            <x-form.input
                                id="form-password"
                                type="password"
                                name="password"
                                autocomplete="new-password"
                                has-errors="{{ $errors->updatePassword->has('password') }}"
                                placeholder="..."
                                required
                            />

                            <x-form.validation-message
                                field="password"
                                bag="updatePassword"
                            />
                        </div>

                        <div class="field">
                            <x-form.label
                                for="form-password-confirmation"
                                text="{{ __('New password confirmation') }}"
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
                            text="{{ __('Update') }}"
                            class="is-primary"
                        />
                    </form>
                </div>
            </div>
        </x-layout.compact>
    </x-layout.container>
@endsection
