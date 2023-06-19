<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use App\Models\item;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = config('champs.items');
        
        foreach($items as $item) {
            $newItem = new item();
            $newItem->name = $item['name'];
            $newItem->subname = $item['cost'];
            $newItem->slug = Str::slug($newItem->name, '-');
            $newItem->type = $item['type'];
            $newItem->save();
        }
    }
}
