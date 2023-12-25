@extends('layouts.app')

@section('content')
    <div class="text-white p-16">
        <div class="w-[500px] mt-8 p-7 bg-blue-300 bg-clip-padding backdrop-filter backdrop-blur-sm bg-opacity-10 border border-blue-300">
            <h1 class="text-4xl font-bold mb-2">Login</h1>
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="flex flex-col mb-3">
                    <label for="">Email</label>
                    <input type="text" name="email" class="rounded text-black">
                    @error('email')
                        <p class="text-red-700 font-semibold text-sm">*{{ $message }}*</p>
                    @enderror
                </div>
                <div class="flex flex-col">
                    <label for="">Password</label>
                    <input type="password" name="password" class="rounded text-black">
                    @error('password')
                        <p class="text-red-700 font-semibold text-sm">*{{ $message }}*</p>
                    @enderror
                </div>
                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox"
                            class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                        <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>
                <p class="text-sm text-green-600 mt-2">*I don't have an account.<a href="{{ route('register') }}"
                        class="mx-2 underline focus:outline focus:outline-2 focus:rounded-sm focus:outline-green-600">Register</a>
                </p>
                <button type="submit"
                    class="text-center bg-purple-700 hover:bg-purple-600 w-full rounded mt-3 p-3">Login</button>
            </form>
        </div>
    </div>
@endsection
