<?php

namespace Database\Seeders;

use App\Models\Character;
use App\Models\Item;
use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class CharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {

        $types = Type::all();
        $typeIds = $types->pluck('id');
        // $items = Item::all();
        // $itemesIds = $items->pluck('id'); 


        for ($i = 0; $i < 100; $i++) {
            $new_character = new Character();

            $new_character->nome = $faker->unique()->name();

            $new_character->bio = $faker->paragraph(3);
            $new_character->attacco = $faker->randomNumber(2, false) + 1;
            $new_character->difesa = $faker->randomNumber(2, false) + 1;
            $new_character->velocità = $faker->randomNumber(2, false) + 1;
            $new_character->hp = $faker->randomNumber(2, false) + 1;
            // @dd($new_character->items);
            // $new_character->items = $faker->randomElements($itemesIds,3);
            $new_character->type_id = $typeIds->random();
            $new_character->save();
        }
    }

}
