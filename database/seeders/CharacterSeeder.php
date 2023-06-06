<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Character;
use Faker\Generator as Faker;

class CharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i < 20; $i++){
            $newCharacter = new Character();
            $newCharacter->name = $faker->name();
            $newCharacter->description = $faker->paragraph(true);
            $newCharacter->attack = $faker->numberBetween(25, 80);
            $newCharacter->defence = $faker->numberBetween(20, 75);
            $newCharacter->speed = $faker->numberBetween(20, 90);
            $newCharacter->life = $faker->numberBetween(1, 100);
            $newCharacter->save();
        }
    }
}
