<?php

namespace App\Http\Controllers;

use App\Models\Character;
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

    public function create() {

        return view ('characters.create');
    }

    public function store(Request $request) {

        $data = $request->all();

        $new_character = Character::create($data);

        return redirect()->route('characters.show',$new_character);
    }

    public function edit (Character $character) {

        return view('characters.edit',compact('character'));

    }

    public function update (Request $request, Character $character) {

        $data = $request->all();

        $character->update($data);

        return redirect()->route('characters.show',$character);

    }

    public function destroy (Character $character) {

        $character->delete();

        return redirect()->route('index');
    }

}

