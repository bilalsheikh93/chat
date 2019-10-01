@extends('layouts.app')

@section('content')

<!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <div id="app">

        <main class="py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body" id="app">
                            <chat-app :user="{{ auth()->user() }}"></chat-app>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </main>
    </div>
@endsection
