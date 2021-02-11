@extends('layouts.app')

@section('content')
    <x-layout.container>
        <div class="text-center">
            <h2>Hi, {{ $authUser->name }}!</h2>

            <p>How are you?</p>

            <a href="/users/edit" class="btn">
                {{ __('Edit profile') }}
            </a>

            <a href="/users/update-password" class="btn">
                {{ __('Update password') }}
            </a>
        </div>
    </x-layout.container>
@endsection
