<header class=" text-white px-2 py-6 bg-slate-800 font-bold">
    <div class="container my-0 mx-auto transition-all duration-300">
        <div class="flex justify-between">
            <h1>My Heros</h1>
            <ul class="flex gap-6">
                <li>
                    <a href="{{ route('index') }}">
                        <span class="hover:text-emerald-300 transition-colors duration-300">HOME</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('characters.create') }}">
                        <span class="hover:text-emerald-300  transition-colors duration-300">CREATE</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</header>
