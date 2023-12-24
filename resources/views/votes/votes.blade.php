@extends('layouts.app')

@section('content')
    <div class="pt-6">
        <a href="{{ route('welcome') }}" class="text-white m-7 bg-gray-500 p-2 rounded hover:bg-gray-400"><i class="fas fa-chevron-left mr-1"></i>Back</a>
    </div>
    <div class="text-white p-20 flex justify-center">
        <div class="p-10 w-[600px] bg-indigo-200 rounded-md bg-clip-padding backdrop-filter backdrop-blur-md bg-opacity-10 border border-gray-100">
            <h1 class="text-3xl font-bold mb-5">Choose a participant to vote.</h1>
            @foreach ($categories as $category)
                <form action="{{ route('vote.store', $category->id) }}" method="POST">
                    @csrf

                    <h1 class="text-1xl font-semibold uppercase mb-2">{{ $category->category }}</h1>
                    <hr>


                    <div class="flex flex-col gap-y-5 mt-3">
                        <select name="participant" id="" class="text-black rounded p-2 font-semibold">
                            @foreach ($participants as $participant)
                                <option value="{{ $participant->id }}" class="font-semibold mb-2">{{ $participant->participant }}</option>
                            @endforeach
                        </select>
                        <input hidden type="number" value="1" name="votes" required class="text-black rounded p-2 hiden">
                    </div>

                    <button type="submit" class="font-bold mt-10 bg-purple-700 w-full rounded p-2 hover:bg-purple-600">Vote</button>
                </form>
            @endforeach
        </div>
    </div>
@endsection
