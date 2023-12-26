@extends('layouts.app')

@section('content')
    <div class="text-white p-20 flex justify-center">
        <div
            class="p-10 w-[600px] bg-indigo-200 rounded-md bg-clip-padding backdrop-filter backdrop-blur-md bg-opacity-10 border border-gray-100">

            <h1 class="text-3xl font-bold mb-5">Choose a participant to vote.</h1>
            @foreach ($categories as $category)
                <form action="{{ route('vote.store', $category->id) }}" method="POST">
                    @csrf

                    <h1 class="text-1xl font-semibold uppercase mb-2">{{ $category->category }}</h1>
                    <hr>

                    <div class="flex flex-col gap-y-5 mt-3">
                        <select name="participant" id="" class="text-black rounded p-2 font-semibold">
                            @foreach ($participants as $participant)
                                <option value="{{ $participant->id }}" class="font-semibold mb-2">
                                    {{ $participant->participant }}</option>
                            @endforeach
                        </select>
                        <input hidden type="number" value="1" name="votes" required
                            class="text-black rounded p-2 hiden">
                    </div>

                    @if (session('error'))
                        <p class="text-red-700 mt-3 font-bold">{{ session('error') }}!!</p>
                    @endif

                    <div class="flex flex-wrap w-full justify-between gap-x-4 mt-3">
                        <a href="{{ route('welcome') }}"
                            class="text-white bg-gray-500 rounded hover:bg-gray-400 py-2 px-5">
                            <i class="fas fa-chevron-left mr-1"></i>Back</a>
                        <button type="submit"
                            class="font-bold bg-purple-700 rounded hover:bg-purple-600 py-2 px-5">Vote <i class="fas fa-check"></i></button>
                    </div>
                </form>
            @endforeach
        </div>
    </div>
@endsection
