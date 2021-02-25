@extends('layouts.app')

@section('content')
    <x-layout.container>
        <x-layout.compact>
            <x-alert
                :message="$errors->first()"
                type="error"
                class="mb-2"
            />

            @if (session('status'))
                <x-alert
                    message="{{ session('status') }}"
                    type="is-success"
                    class="mb-2"
                />
            @endif

            <div class="card">
                <x-card.header
                    title="{{ __('Forgot password') }}"
                    icon="heroicon-o-lock-closed"
                />

                <div class="card-content">
                    <form method="post" action="{{ route('password.email') }}" class="form">
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
                                autofocus
                            />
                        </div>

                        <x-button
                            text="{{ __('Send reset link') }}"
                            class="is-primary"
                        />
                    </form>
                </div>
            </div>
        </x-layout.compact>
    </x-layout.container>
@endsection
