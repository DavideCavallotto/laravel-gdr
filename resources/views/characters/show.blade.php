@extends('layouts.app')

@section('content')
    <section class="px-10">
        <div class="container my-0 mx-auto transition-all duration-300 text-white text-xl">
            <div class="bg-slate-700 rounded px-8 py-12 mt-20">
                <h1 class="pt-10 mb-10 text-emerald-400 font-bold text-2xl text-center uppercase ">Your Chosen
                    Character</h1>
                <div class="flex flex-col gap-4">
                    <h1 class="pb-3 text-2xl">{{ $character->nome }}</h1>
                    <p>
                        {{ $character->bio }}
                    </p>
                    <strong>
                        {{ $character->type->name }}
                    </strong>
                    <p>
                        {{$character->type->description}}
                    </p>
                        <li class="flex gap-2 items-center">
                            <img class=" translate-y-[3px]" width="28" height="28"
                                src="https://img.icons8.com/parakeet/48/000000/shield.png" alt="shield" />
                            <span>
                                = {{ $character->difesa }}
                            </span>
                        </li>
                        <li class="flex gap-2 items-center">
                            <img width="28" height="28" src="https://img.icons8.com/stencil/32/sports-mode.png"
                                alt="sports-mode" />
                            <span>
                                = {{ $character->velocità }}
                            </span>
                        </li>
                        <li class="flex gap-2 items-center">
                            <img width="28" height="28" src="https://img.icons8.com/office/16/undertale-heart.png"
                                alt="undertale-heart" />
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
                        <a class="bg-emerald-400 hover:bg-emerald-500 transition-colors duration-200 px-10 rounded py-2 uppercase"
                            href="{{ route('characters.edit', $character) }}">Edit</a>
                        <form action="{{ route('characters.destroy', $character) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button
                                class="bg-red-400 hover:bg-red-500 transition-colors duration-200 px-10 rounded py-2 uppercase"
                                onclick="return confirm('Are you sure you want to Delete this Item ?')"
                                type="submit">Delete</button>
                        </form>
                        </li>

                </div>
            </div>

        </div>
    </section>
@endsection
