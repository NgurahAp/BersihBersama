<aside class="bg-gray-800 text-white w-64 p-4">
    <nav>
        <ul>
            <li class="mb-4"><a href="{{ route('event.index') }}" class="hover:underline">Event</a></li>
            <li class="mb-4"><a href="{{ route('event.aduan') }}" class="hover:underline">aduan</a></li>
            <li class="mb-4"><a href="{{ route('blog.index') }}" class="hover:underline">Blog</a></li>
            <li class="mb-4">
                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf
                    <button type="submit"
                        class="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
                        {{ __('Log Out') }}
                    </button>
                </form>
            </li>
        </ul>
    </nav>
</aside>
