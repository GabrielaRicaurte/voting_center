@extends('layouts.app')

@section('content')
    <div class="p-10 flex justify-center">
        <div class="w-96 rounded mt-8 p-7 bg-blue-300 bg-clip-padding backdrop-filter backdrop-blur-sm bg-opacity-10 border border-blue-300">
            @if (Route::has('login'))
                <div class="text-white flex flex-col gap-y-5">
                    <h1 class="text-4xl font-bold">Voting Center...</h1>
                    <hr>
                    @auth
                        <a href="{{ url('/dashboard') }}"
                            class="font-semibold focus:outline focus:outline-2 focus:rounded-sm focus:outline-purple-700">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}"
                            class="focus:outline focus:outline-2 focus:rounded-sm focus:outline-purple-700 text-2xl transition hover:scale-105">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class=" focus:outline focus:outline-2 focus:rounded-sm focus:outline-purple-700 text-2xl transition hover:scale-105">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </div>
@endsection
