<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $items = [
            [
                'name' => 'Spada del Drago',
                'description' => 'Una spada leggendaria forgiata con il fuoco del drago.',
                'type' => 'Arma',
                'rarity' => 'Epica',
            ],
            [
                'name' => 'Pozione di Guarigione',
                'description' => 'Una pozione che ripristina le ferite del personaggio.',
                'type' => 'Pozione',
                'rarity' => 'Comune',
            ],
            [
                'name' => 'Arco dell\'Elfo',
                'description' => 'Un arco scolpito con eleganti intarsi elfici.',
                'type' => 'Arma',
                'rarity' => 'Raro',
            ],
            [
                'name' => 'Armatura del Cavaliere',
                'description' => 'Un\'armatura pesante che offre una forte protezione in battaglia.',
                'type' => 'Armatura',
                'rarity' => 'Raro',
            ],
            [
                'name' => 'Anello della Visione',
                'description' => 'Conferisce una visione migliore al personaggio.',
                'type' => 'Accessorio',
                'rarity' => 'Unica',
            ],
            [
                'name' => 'Bacchetta Magica',
                'description' => 'Una bacchetta che amplifica il potere magico del suo utilizzatore.',
                'type' => 'Arma',
                'rarity' => 'Raro',
            ],
            [
                'name' => 'Fiala di Veleno',
                'description' => 'Un veleno potente per avvelenare le lame delle armi.',
                'type' => 'Pozione',
                'rarity' => 'Raro',
            ],
            [
                'name' => 'Elmo del Dominatore',
                'description' => 'Un elmo incantato che concede al suo portatore controllo mentale sugli avversari.',
                'type' => 'Armatura',
                'rarity' => 'Epica',
            ],
            [
                'name' => 'Collana della Guarigione',
                'description' => 'Una collana che accelera il processo di guarigione del portatore.',
                'type' => 'Accessorio',
                'rarity' => 'Raro',
            ],
            [
                'name' => 'Borsa Infinita',
                'description' => 'Una borsa magica con uno spazio interno apparentemente infinito.',
                'type' => 'Accessorio',
                'rarity' => 'Epica',
            ],
            [
                'name' => 'Lancia del Vento',
                'description' => 'Una lancia che controlla il vento per colpire i nemici da lontano.',
                'type' => 'Arma',
                'rarity' => 'Raro',
            ],
            [
                'name' => 'Armatura dell\'Ombra',
                'description' => 'Un armatura leggera che confonde gli attacchi nemici mimetizzandosi con l ombra',
                'type' => 'Armatura',
                'rarity' => 'Epica',
            ],
            [
                'name' => 'Amuleto della Protezione',
                'description' => 'Un amuleto che aumenta la difesa contro attacchi magici.',
                'type' => 'Accessorio',
                'rarity' => 'Raro',
            ],
            [
                'name' => 'Martello del Tuono',
                'description' => 'Un martello che evoca fulmini durante il combattimento.',
                'type' => 'Arma',
                'rarity' => 'Epica',
            ],
            [
                'name' => 'Occhiali della Saggezza',
                'description' => 'Occhiali incantati che migliorano la percezione e la saggezza del loro indossatore.',
                'type' => 'Accessorio',
                'rarity' => 'Raro',
            ],
        ];

        foreach($items as $item) {

            $new_item = new Item();
            $new_item->name = $item['name'];
            $new_item->description = $item['description'];

            $new_item->save();
        }

    }
}
