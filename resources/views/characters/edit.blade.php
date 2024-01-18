@extends('layouts.app')

@section('content')
    <section class="pt-5">
        <div class="container my-0 mx-auto">
            <form action="{{ route('characters.update', $character) }}" method="POST" class="w-full max-w-lg">
                @csrf
                @method('PUT')
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-first-name">
                            Nome
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                            id="grid-first-name" type="text" placeholder="Your PG Name" name="nome"
                            value="{{ old('nome', $character->nome) }}">
                    </div>
                    <div class="w-full md:w-1/2 px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-last-name">
                            Bio
                        </label>
                        <textarea
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="bio" name="bio" value="">{{ old('bio', $character->bio) }}</textarea>
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-2">
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
                            Difesa
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="difesa" type="number" placeholder="Difesa" name="difesa" min="20" max="100"
                            value="{{ old('difesa', $character->difesa) }}">
                    </div>
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                            Velocita'
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="velocità" type="number" placeholder="Velocità" min="20" max="100"
                            name="velocità" value="{{ old('velocità', $character->velocità) }}">
                    </div>
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
                            HP
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="hp" type="number" placeholder="HP" name="hp" min="20" max="100"
                            value="{{ old('hp', $character->hp) }}">
                    </div>

                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
                            Attacco
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="attacco" type="number" placeholder="attacco" name="attacco" min="20" max="100"
                            value="{{ old('attacco', $character->attacco) }}">
                    </div>

                    <div class="mb-3">
                        <label for="typetype_id" class="form-label">Categorie</label>
                        <select name="type_id" class="form-control" id="type_id">
                          <option>Seleziona una categoria</option>
                          @foreach($types as $type)
                            <option @selected( old('type_id', optional($character->type)->id) == $type->id) value="{{ $type->id }}">{{ $type->name }}</option>
                          @endforeach
                        </select>
                      </div>
                      <div class="form-group mb-3">
                        <p>Seleziona gli items:</p>
                        <div class="d-flex flex-wrap gap-4 ">
                          @foreach ($items as $item)
                            <div class="form-check">
                              <input name="items[]" class="form-check-input" type="checkbox" value="{{$item->id}}" id="item-{{$item->id}}" @checked(in_array($item->id, old('items',$character->items->pluck('id')->all()))) >
                              <label class="form-check-label" for="item-{{$item->id}}">
                                {{ $item->name }}
                              </label>
                            </div>
                          @endforeach
                        </div>
                      </div>

                      <input type="hidden" name="password" value="fakepassword">
                    <div class="w-full px-3 mb-6 md:mb-0 pt-5 text-center">
                        <button class="bg-blue-600 p-3 rounded-lg text-white" type="submit">Edit</button>
                    </div>
                </div>

            </form>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="text-red-500 bg-white w-[25%] text-center">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        </div>
    </section>
@endsection
