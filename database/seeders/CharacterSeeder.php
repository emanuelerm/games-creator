<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use config\champs;
use Illuminate\Support\Str;
use App\Models\Character;

class CharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $characters = config('champs.champions');

        foreach($characters as $character) {
            $newCharacter = new Character();
            $newCharacter->name = $character['name'];
            $newCharacter->subname = $character['subname'];
            $newCharacter->slug = Str::slug($newCharacter->name, '-');
            $newCharacter->description = $character['description'];
            $newCharacter->role = $character['role'];
            $newCharacter->difficoulty = $character['difficoulty'];
            $newCharacter->image = $character['image'];
            $newCharacter->save();
        }
    }
}
