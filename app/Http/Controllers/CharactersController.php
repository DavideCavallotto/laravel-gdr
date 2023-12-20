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

    public function create() {

        return view ('characters.create');
    }
}
