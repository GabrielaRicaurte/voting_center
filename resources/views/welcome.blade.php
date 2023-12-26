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
                            class="font-semibold ">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}"
                            class=" text-2xl transition hover:scale-105"><i class="fas fa-caret-right"></i> Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="  text-2xl transition hover:scale-105"><i class="fas fa-caret-right"></i> Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </div>
@endsection
