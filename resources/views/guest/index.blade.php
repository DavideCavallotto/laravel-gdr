@extends('layouts.app')

@section('content')
    <section class="px-10">
        <div class="container my-0 mx-auto transition-all duration-300">
            <h1 class="pt-10 text-white font-bold text-xl text-center">Your Characters:</h1>
            <ul class="grid text-white grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 2xl:grid-cols-5 gap-6 pt-16">

                @forelse ($characters as $character)
                    <li class=" transition-all duration-200 hover:scale-95">
                        <a class="bg-slate-400 p-5 flex flex-col gap-4 h-[400px] rounded-md drop-shadow-md"
                            href="{{ route('characters.show', $character) }}">
                            <h2><span class="font-bold">Nome: </span>{{ $character->nome }}</h2>
                            <h3 class=" flex-grow overflow-auto text-base">
                                <span class="font-bold">Bio: </span>{{ $character->bio }}
                            </h3>
                            <ul class="flex items-center gap-4">
                                <li class="flex gap-2 items-center">
                                    <img class=" translate-y-[3px]" width="28" height="28"
                                        src="https://img.icons8.com/parakeet/48/000000/shield.png" alt="shield" />
                                    <span>
                                        = {{ $character->difesa }}
                                    </span>
                                </li>
                                <li class="flex gap-2 items-center">
                                    <img width="28" height="28"
                                        src="https://img.icons8.com/stencil/32/sports-mode.png" alt="sports-mode" />
                                    <span>
                                        = {{ $character->velocità }}
                                    </span>
                                </li>
                                <li class="flex gap-2 items-center">
                                    <img width="28" height="28"
                                        src="https://img.icons8.com/office/16/undertale-heart.png" alt="undertale-heart" />
                                    <span>
                                        = {{ $character->hp }}
                                    </span>
                                </li>
                                <li class="flex gap-2 items-center">
                                    <img width="28" height="28" src="https://img.icons8.com/color/48/sword.png" alt="sword"/>
                                    <span>
                                        = {{ $character->attacco }}
                                    </span>
                                </li>
                            </ul>
                        </a>
                    </li>
                @empty
                @endforelse
            </ul>
        </div>
    </section>
@endsection
