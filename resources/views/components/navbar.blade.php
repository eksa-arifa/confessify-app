<nav class="w-screen py-8 px-20 flex justify-between items-center absolute top-0 left-0 border-b-2">
    <a href="" class="font-bold text-3xl text-indigo-500">
        {{config('app.name')}}
    </a>
    <ul class="flex gap-6 items-center">
        @guest
            <li><a href="/login">Login</a></li>
            <li><a href="/register">Register</a></li>
        @endguest
        @auth
            <li>
                <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="text-white bg-indigo-600 hover:bg-indigo-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-indigo-600 dark:hover:bg-indigo-700 focus:outline-none dark:focus:ring-blue-800 mt-4">Logout</button>
                </form>
            </li>
        @endauth
    </ul>
</nav>