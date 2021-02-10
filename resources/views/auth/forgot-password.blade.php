@extends('layouts.app')

@section('content')
    <x-layout.container>
        <div class="columns justify-center">
            <div class="column col-6">
                <x-alert :message="$errors->first()" type="error" class="mb-2" />

                @if (session('status'))
                  <x-alert message="{{ session('status') }}" type="success" class="mb-2" />
                @endif

                <div class="card">
                    <x-card.header
                        title="{{ __('Forgot password') }}"
                        subtitle="{{ __('Request a link to reset your password') }}"
                    />

                    <div class="card-body">
                        <form method="post" action="{{ route('password.email') }}">
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
                                    autofocus
                                />
                            </div>

                            <x-button text="{{ __('Send reset link') }}" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </x-layout.container>
@endsection
