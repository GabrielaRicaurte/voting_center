@extends('layouts.app')

@section('content')
    <div class="p-10 flex justify-center">
        <div class="w-[500px] absolute mx-10 ">
            <div
                class="rounded mt-8 p-10 bg-gray-400 bg-clip-padding backdrop-filter backdrop-blur-sm bg-opacity-10 border border-gray-100">
                @if (Route::has('login'))
                    <div class="text-white flex flex-col gap-y-5">
                        <h1 class="text-4xl mb-4 font-bold">Voting Center...</h1>
                        {{-- <hr> --}}
                        <div class="flex justify-between">
                            @auth
                                <a href="{{ url('/dashboard') }}" class="font-semibold ">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}" class=" text-2xl transition hover:scale-105"><i
                                        class="fas fa-caret-right"></i> Login</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="  text-2xl transition hover:scale-105"><i
                                            class="fas fa-caret-right"></i> Register</a>
                                @endif
                            @endauth
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
