@extends('layouts.app')

@section('content')
    <div class="text-white p-16">
        <div
            class="w-[500px] mt-5 p-7 bg-blue-300 bg-clip-padding backdrop-filter backdrop-blur-sm bg-opacity-10 border border-blue-300">
            <h1 class="text-4xl font-bold">Register</h1>
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="flex flex-col mb-3">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="rounded text-black">
                    @error('name')
                        <p class="text-red-700 font-semibold text-sm">*{{ $message }}*</p>
                    @enderror
                </div>
                <div class="flex flex-col mb-3">
                    <label for="email">Email</label>
                    <input type="text" name="email" class="rounded text-black">
                    @error('email')
                        <p class="text-red-700 font-semibold text-sm">*{{ $message }}*</p>
                    @enderror
                </div>
                <div class="flex flex-col mb-3">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="rounded text-black">
                </div>
                <div class="flex flex-col mb-3">
                    <label for="password_confirmation">Password Confirmation</label>
                    <input type="password" name="password_confirmation" class="rounded text-black">
                </div>
                @error('password')
                    <p class="text-red-700 font-semibold text-sm">*{{ $message }}*</p>
                @enderror
                <p class="mt-2 text-sm text-green-600">*I already have an account. <a href="{{ route('login') }}"
                        class="mx-1 underline focus:outline focus:outline-2 focus:rounded-sm focus:outline-green-600">Login</a>
                </p>
                <div class="w-full flex justify-center">
                    <button type="submit"
                        class="text-center bg-purple-700 hover:bg-purple-600 w-full rounded mt-3 p-3">Register</button>
                </div>
            </form>
        </div>
    </div>
@endsection
