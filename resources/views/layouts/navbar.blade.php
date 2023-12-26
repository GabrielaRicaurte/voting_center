<style>
    .active {
        border-radius: 5px;
        /* background-color: #141111; */
        color: #9333ea;
    }

    .active:hover {
        color: #be8bec;
    }
</style>
<nav class="w-full flex justify-between p-3 mb-1 shadow-lg shadow-purple-600/10">
    <ul class="text-white flex items-center">
        <li
            class="transition hover:translate-x-2 text-xl font-bold p-1 px-2 hover:text-purple-600 pointer {{ Request::is('dashboard') ? 'active' : '' }}">
            <i class="fas fa-list-ul mx-1"></i></i><a href="{{ route('dashboard') }}">Categories</a>
        </li>
        <li
            class="transition hover:translate-x-2 text-xl font-bold p-1 px-2 hover:text-purple-600 pointer {{ Request::is('results') ? 'active' : '' }}">
            <i class="fas fa-list-ul mx-1"></i></i><a href="{{ route('results') }}">Results</a>
        </li>
    </ul>
    <ul class="flex items-center gap-x-5 text-white">
        <li class=" font-semibold uppercase text-lg"><i class="fas fa-user mx-1"></i>{{ Auth::user()->name }}</li>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit"
                class="border-2 text-purple-600 p-1 px-2 rounded text-lg border-black hover:text-white hover:border-purple-600"><i
                    class="fas fa-reply mr-2"></i>Log Out</button>
        </form>
    </ul>
</nav>
