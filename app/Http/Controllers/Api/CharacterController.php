<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Character;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
    public function index(Request $request){
        $results = Character::with('type', 'item')->paginate(20);

        return response()->json([
            'characters' => $results,
            'success' => true,
        ]);
    }
    public function show(Character $character){
        $character->load('type', 'item');

        return response()->json([
            'project' => $character,
        ]);
    }
}
