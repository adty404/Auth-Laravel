<div class="bg-white shadow flex justify-between">
    <ul class="flex items-center">
        <li>
            <a href="/" class="px-4 py-5 inline-block">Home</a>
        </li>
        <li>
            <a href="/dashboard" class="px-4 py-5 inline-block">Dashboard</a>
        </li>
    </ul>
    <ul class="flex items-center">
        @guest
            <li>
                <a href="/register" class="px-4 py-5 inline-block">Register</a>
            </li>
            <li>
                <a href="/login" class="px-4 py-5 inline-block">Login</a>
            </li>
        @else
            <li>
                <a href="/profile" class="px-4 py-5 inline-block">{{ Auth::user()->name }}</a>
            </li>
            <li>
                <form action="{{ route('logout') }}" method="post" class="px-4 py-5 inline-block">
                    @csrf
                    <button type="submit" class="focus:outline-none">Logout</button>
                </form>
            </li>
        @endguest
    </ul>
</div>