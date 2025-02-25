@extends('layouts.app')

@section('content')
    <x-layout.container>
        <x-layout.compact>
            <div class="has-text-centered">
                <h2 class="title">
                    Hi, there!
                </h2>

                <p class="subtitle">
                    Let this be the start of something beautiful.
                </p>

                <a href="https://github.com/riteable/staravel" target="_blank" class="button">
                    Source @ Github
                </a>
            </div>
        </x-layout.compact>
    </x-layout.container>
@endsection
