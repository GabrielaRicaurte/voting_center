@extends('layouts.app')

@section('content')
    <div class="text-white mt-7 px-20 w-full">
            <h1 class="font-bold text-4xl mb-5">Results.</h1>
            <hr>

            <div class="flex flex-col items-center">
                @foreach ($categories as $category)
                    <h1 class="uppercase font-semibold mt-5">{{ $category->category }}</h1>

                    <table class="border-collapse mt-1 mb-7 w-[600px] bg-blue-300 bg-clip-padding backdrop-filter backdrop-blur-sm bg-opacity-10 border border-blue-300">
                        <thead>
                            <th class="border border-slate-500 text-lg px-7 py-1">Participant</th>
                            <th class="border border-slate-500 text-lg px-3 py-1">votes</th>
                        </thead>
                        <tbody>
                            @foreach ($category->result as $result)
                                <tr>
                                    <td class="border border-slate-500 px-2">
                                        {{ $result->participant->participant }}
                                    </td>
                                    <td class="border border-slate-500 text-center py-2">{{ $result->votes }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endforeach
            </div>

        </div>
@endsection
