<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
            [
                'name' => 'Mago',
                'description' => 'Lanciatore di incantesimi magici potenti.',
            ],
            [
                'name' => 'Guerriero',
                'description' => 'Esperto di combattimento corpo a corpo con abilità di difesa.',
            ],
            [
                'name' => 'Ladro',
                'description' => 'Maestro della furtività e del furto.',
            ],
            [
                'name' => 'Chierico',
                'description' => 'Sacerdote devoto, abile nell\'uso di incantesimi di guarigione.',
            ],
            [
                'name' => 'Ranger',
                'description' => 'Esperto nell\'uso dell\'arco e nell\'esplorazione della natura.',
            ],
[
                'name' => 'Barbaro',
                'description' => 'Combattente selvaggio con una forza bruta e resistenza notevole.',
            ],
            [
                'name' => 'Stregone',
                'description' => 'Studioso delle arti oscure, controlla creature magiche e incanta gli avversari.',
            ],
            [
                'name' => 'Ingegnere Meccanico',
                'description' => 'Costruisce e utilizza dispositivi meccanici per manipolare il campo di battaglia.',
            ],
            [
                'name' => 'Bardo',
                'description' => 'Abile musicista e narratore, influisce sulle emozioni degli altri.',
            ],
            [
                'name' => 'Paladino',
                'description' => 'Cavaliere devoto con abilità di guarigione e protezione divina.',
            ],

           ];

           foreach($types as $type) {

                $new_type = new Type();

                $new_type->name = $type['name'];
                $new_type->description = $type['description'];

                $new_type->save();

           }
    }
}
