@extends('layouts.app')

@section('content')
    <x-layout.container>
        <div class="text-center">
            <h2>Hi, {{ auth()->user()->name }}!</h2>

            <p>How are you?</p>

            <a href="{{ route('user-profile-information.edit') }}" class="btn">
                {{ __('Edit profile') }}
            </a>

            <a href="{{ route('user-password.edit') }}" class="btn">
                {{ __('Update password') }}
            </a>
        </div>
    </x-layout.container>
@endsection
