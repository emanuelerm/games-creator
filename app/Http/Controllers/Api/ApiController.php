<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Character;
use Database\Seeders\CharacterSeeder;

class ApiController extends Controller
{
    public function index()
    {
        $character = Character::with('items')->paginate(5);
        return response()->json([
            'success' => true,
            'results' => $character
        ]);
    }


    public function show($slug)
    {
        $character = Character::with('item')->where('slug', $slug)->first();

        if($character){
        return response()->json([
            "succes" => true,
            "result" => $character
        ]);
        } else{
            return response()->json([
                'success' => false,
                'results' => 'Nessun risultato'
            ]);
        }
    }

}
