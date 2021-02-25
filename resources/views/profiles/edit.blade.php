@extends('layouts.app')

@section('content')
    <x-layout.container>
        <x-layout.compact>
            @if (session('status') === 'profile-information-updated')
                <x.alert message="{{ __('Profile information updated!') }}" type="success" />
            @endif

            <div class="card">
                <x-card.header
                    title="{{ __('Edit profile') }}"
                    icon="heroicon-s-pencil-alt"
                />

                <div class="card-content">
                    <form method="post" action="{{ route('user-profile-information.update') }}" class="form">
                        @csrf

                        {{ method_field('put') }}

                        <div class="field">
                            <x-form.label
                                for="form-email"
                                text="{{ __('Email') }}"
                            />

                            <x-form.input
                                id="form-email"
                                type="email"
                                name="email"
                                value="{{ auth()->user()->email }}"
                                placeholder="@"
                                has-errors="{{ $errors->updateProfileInformation->has('email') }}"
                                required
                            />

                            <x-form.validation-message
                                field="email"
                                bag="updateProfileInformation"
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
