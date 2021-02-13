@extends('layouts.app')

@section('content')
    <x-layout.container>
        <div class="columns justify-center">
            <div class="column col-6">
                @if (session('status') === 'profile-information-updated')
                    <x.alert message="{{ __('Profile information updated!') }}" type="success" />
                @endif

                <div class="card">
                    <x-card.header
                        title="{{ __('Edit profile') }}"
                        subtitle="{{ __('Update your profile information') }}"
                    />

                    <div class="card-body">
                        <form method="post" action="{{ route('user-profile-information.update') }}">
                            @csrf

                            {{ method_field('put') }}

                            <div class="form-group">
                                <x-form.label
                                    for="form-email"
                                    text="{{ __('Email') }}"
                                />

                                <x-form.input
                                    id="form-email"
                                    type="email"
                                    name="email"
                                    value="{{ $authUser->email }}"
                                    placeholder="@"
                                    has-errors="{{ $errors->updateProfileInformation->has('email') }}"
                                    required
                                />

                                <x-form.validation-message
                                    field="email"
                                    bag="updateProfileInformation"
                                />
                            </div>

                            <x-button text="{{ __('Update') }}" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </x-layout.container>
@endsection
