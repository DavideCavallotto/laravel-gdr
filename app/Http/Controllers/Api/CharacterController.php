<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Character;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
    public function index(Request $request){
        $results = Character::with('type', 'items')->paginate(20);

        return response()->json([
            'characters' => $results,
            'success' => true,
        ]);
    }
    public function show(Character $character){
        $character->load('type', 'items');

        return response()->json([
            'project' => $character,
        ]);
    }
}
