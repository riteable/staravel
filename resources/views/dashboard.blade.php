@extends('layouts.app')

@section('content')
    <x-layout.container>
        <x-layout.compact>
            <div class="text-center">
                <h2 class="title">
                    Hi, {{ auth()->user()->name }}!
                </h2>

                <p class="subtitle">
                    How are you?
                </p>

                <a href="{{ route('user-profile-information.edit') }}" class="btn">
                    {{ __('Edit profile') }}
                </a>

                <a href="{{ route('user-password.edit') }}" class="btn">
                    {{ __('Update password') }}
                </a>
            </div>
        </x-layout.compact>
    </x-layout.container>
@endsection
