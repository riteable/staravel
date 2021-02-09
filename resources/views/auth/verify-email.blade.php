@extends('layouts.app')

@section('content')
    <x-layout.container>
        <h2>{{ __('Verify email') }}</h2>

        <p>
            {{ __('Click the link in the email we\'ve just sent you to verify your email address.') }}
        </p>
    </x-layout.container>
@endsection
