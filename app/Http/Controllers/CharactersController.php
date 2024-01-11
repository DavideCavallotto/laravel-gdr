<?php

namespace App\Http\Controllers;

use App\Models\Character;
use App\Models\Type;
use Illuminate\Http\Request;

class CharactersController extends Controller
{
    public function index()
    {
        $characters = Character::all();
        return view("guest.index", compact("characters"));
    }

    public function show(Character $character) {

        return view("characters.show", compact("character"));

         // public function show(int $id)
    // {
    //     $$character = Comic::findOrFail($id);
    //     return view('$character.show', compact('$character'));
    // }
    }

    /**
     * CREATE
     */
    public function create() {

        $types = Type::all();
        return view ('characters.create', compact('types'));
    }

    /**
     * STORE
     */
    public function store(Request $request) {


        $request->validate([
            'nome' => 'required|max:255',
            'bio' => 'required',
            'attacco' => 'nullable',
            'difesa' => 'nullable',
            'velocità' => 'nullable',
            'hp'=> 'nullable',
            'type_id' => 'nullable|exists:types,id',


        ]);

        $data = $request->all();

        $new_character = Character::create($data);

        return redirect()->route('characters.show',$new_character);
    }

    public function edit (Character $character) {




        $types = Type::all();
        return view('characters.edit',compact('character', 'types'));

    }

    public function update (Request $request, Character $character) {


        $request->validate([
            'nome' => 'required|max:255',
            'bio' => 'required',
            'attacco' => 'nullable',
            'difesa' => 'nullable',
            'velocità' => 'nullable',
            'hp'=> 'nullable',
            'type_id' => 'nullable|exists:types,id',


        ]);

        $data = $request->all();

        $character->update($data);

        return redirect()->route('characters.show',$character);

    }

    public function destroy (Character $character) {

        $character->delete();

        return redirect()->route('index');
    }

}

