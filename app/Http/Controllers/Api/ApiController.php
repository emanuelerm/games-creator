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
        $character = Character::paginate(5);
        return response()->json([
            'success' => true,
            'results' => $character
        ]);
    }


    public function show($slug)
    {
        $character = Character::where('slug', $slug)->first();
        return response()->json([
            "succes" => true,
            "result" => $character
        ]);
    }
}
