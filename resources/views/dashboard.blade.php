@extends('layouts.app')

@section('content')
    <x-layout.container>
        <x-layout.compact>
            <div class="has-text-centered">
                <h2 class="title">
                    Hi, {{ auth()->user()->name }}!
                </h2>

                <p class="subtitle">
                    How are you?
                </p>

                <a href="{{ route('user-profile-information.edit') }}" class="button">
                    {{ __('Edit profile') }}
                </a>

                <a href="{{ route('user-password.edit') }}" class="button">
                    {{ __('Update password') }}
                </a>
            </div>
        </x-layout.compact>
    </x-layout.container>
@endsection
