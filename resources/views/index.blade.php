@extends('layouts.app')

@section('content')
    <x-layout.container>
        <div class="text-center">
            @auth
                <h2>Hi, {{ $authUser->name }}!</h2>

                <p>How are you?</p>

                <a href="/account" class="btn">
                    {{ __('My account') }}
                </a>
            @endauth

            @guest
                <h2>Hi, there!</h2>

                <p>Let this be the start of something beautiful.</p>
            @endguest
        </div>
    </x-layout.container>
@endsection
