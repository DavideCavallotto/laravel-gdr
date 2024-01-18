@extends('layouts.app')

@section('content')
    <section>
        <div class="flex justify-center items-center min-h-[calc(100svh-72px)]">
            <form action="{{ route('characters.store') }}" method="POST" class="w-full max-w-lg">
                @csrf
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="grid-first-name">
                            Nome
                        </label>
                        <input
                            class="appearance-none h-[66px] block w-full bg-gray-200 text-black border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                            id="nome" type="text" placeholder="Your PG Name" name="nome">
                    </div>
                    <div class="w-full md:w-1/2 px-3">
                        <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="grid-last-name">
                            Bio
                        </label>
                        <textarea
                            class="appearance-none block w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="bio" name="bio"></textarea>
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-2">
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="grid-city">
                            Difesa
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="difesa" type="number" placeholder="Difesa" name="difesa" min="20" max="100">
                    </div>
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="grid-state">
                            Velocita'
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="velocità" type="number" placeholder="Velocità" min="20" max="100"
                            name="velocità">
                    </div>
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="grid-zip">
                            HP
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="hp" type="number" placeholder="HP" name="hp" min="20" max="100">
                    </div>
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
                            Attacco
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="attacco" type="number" placeholder="attacco" name="attacco" min="20" max="100">
                    </div>
                    <div class="mb-3">
                        <label for="typetype_id" class="form-label">Categorie</label>
                        <select name="type_id" class="form-control" id="type_id">
                          <option>Seleziona una categoria</option>
                          @foreach($types as $type)
                            <option @selected( old('type_id') == $type->id ) value="{{ $type->id }}">{{ $type->name }}</option>
                          @endforeach
                        </select>
                      </div>

                      <div class="form-group mb-3">
                        <p>Seleziona i tag:</p>
                        <div class="d-flex flex-wrap gap-4 ">
                          @foreach ($items as $item)
                            <div class="form-check">
                              <input name="items[]" class="form-check-input" type="checkbox" value="{{$item->id}}" id="item-{{$item->id}}" @checked( in_array($item->id, old('items',[]) ) ) >
                              <label class="form-check-label" for="item-{{$item->id}}">
                                {{ $item->name }}
                              </label>
                            </div>
                          @endforeach
                        </div>
                      </div>

                    <div class="w-full px-3 mb-6 md:mb-0 pt-5 text-center">
                        <button
                            class="bg-blue-600 hover:bg-blue-700 transition-colors duration-300 w-full p-3 rounded-lg text-white"
                            type="submit">Create</button>
                    </div>
                </div>

            </form>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="text-red-500 bg-white">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        </div>
    </section>
@endsection
