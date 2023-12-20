@extends('layouts.app')

@section('content')
    <section class="px-10">
        <div class="container my-0 mx-auto transition-all duration-300">
            <h1 class="pt-10 text-white font-bold text-xl text-center">Your Chosen Character:</h1>
            <div>
                <h1 class="pb-3">{{ $character->nome }}</h1>
                <p>
                  {{ $character->bio }}
                </p>
                <ul>
                    <li>
                        {{ $character->difesa}}
                    </li>
                    <li>
                        {{ $character->velocità }}
                    </li>
                    <li>
                        {{ $character->hp}}
                    </li>
                    <li>
                        <a href="{{ route('characters.edit',$character) }}">Edit</a>
                        <form action="{{ route('characters.destroy', $character) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('Are you sure you want to Delete this Item ?')" type="submit">Delete</button>
                        </form>
                    </li>
                </ul>
              </div>
        </div>
    </section>
@endsection
