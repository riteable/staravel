@extends('layouts.app')

@section('content')
    <x-layout.container>
        <div class="text-center">
            <h2>Hi, {{ $authUser->name }}!</h2>

            <p>How are you?</p>

            <a href="{{ route('profile.edit', ['user' => $authUser]) }}" class="btn">
                {{ __('Edit profile') }}
            </a>

            <a href="{{ route('user-password.edit') }}" class="btn">
                {{ __('Update password') }}
            </a>
        </div>
    </x-layout.container>
@endsection
