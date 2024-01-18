<?php

namespace App\Http\Controllers;

use App\Models\Character;
use App\Models\Type;
use App\Models\Item;
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
        $items = Item::all();
        return view ('characters.create', compact('types','items'));
    }

    /**
     * STORE
     */
    public function store(Request $request) {


        $validField = $request->validate([
            'nome' => 'required|max:255',
            'bio' => 'required',
            'attacco' => 'nullable',
            'difesa' => 'nullable',
            'velocità' => 'nullable',
            'hp'=> 'nullable',
            'type_id' => 'nullable|exists:types,id',
            'items.*' => 'nullable|exists:items,id',

        ]);

        $data = $validField;

        
        $new_character = Character::create($data);
        
        if ($request->has('items')) {
            $new_character->items()->attach($data['items']);
        }
        

        return redirect()->route('characters.show',$new_character);
    }

    public function edit (Character $character) {


        $types = Type::all();
        $items = Item::all();
        return view('characters.edit',compact('character', 'types', 'items'));

    }

    public function update (Request $request, Character $character) {


        $validField = $request->validate([
            'nome' => 'required|max:255',
            'bio' => 'required',
            'attacco' => 'nullable',
            'difesa' => 'nullable',
            'velocità' => 'nullable',
            'hp'=> 'nullable',
            'type_id' => 'nullable|exists:types,id',
            'items.*' => 'exists:items,id',
        ]);

        $data = $validField;
        if ($request->has('items')) {
            $character->items()->sync($data['items']);
        }
        else{
            $character->items()->detach();
        }
        $character->update($data);

        return redirect()->route('characters.show',$character);

    }

    public function destroy (Character $character) {

        $character->delete();

        return redirect()->route('index');
    }

}

