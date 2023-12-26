@extends('layouts.app')

@section('content')
    <div class="flex flex-wrap">
        <div class="text-white px-20 py-5 w-full">
            <h1 class="font-bold text-4xl mt-5">Categories.</h1>
            {{-- <hr> --}}

            <table
                class="border-collapse  mt-3 w-full bg-blue-300 bg-clip-padding backdrop-filter backdrop-blur-sm bg-opacity-10 border border-blue-300">
                <thead>
                    <tr>
                        <th class="border border-slate-500 text-2xl px-7 py-5">Categories</th>
                        <th class="border border-slate-500 text-2xl py-5">Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td class="border border-slate-500 px-3 py-4 uppercase">{{ $category->category }}</td>
                            <td class="border border-slate-500 text-center py-4 transition hover:-translate-y-1"><a
                                    href="{{ route('vote.create', $category->id) }}"
                                    class="bg-purple-700 px-5 py-2 rounded hover:bg-purple-600 ">Vote<i class="fas fa-check ml-2"></i></a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
@endsection
