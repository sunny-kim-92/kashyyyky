<?php


namespace Database\Seeders;

use App\Models\Arena;
use App\Models\Aspect;
use App\Models\Card;
use App\Models\CardTrait;
use App\Models\Keyword;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        include 'data/cards.php';

        $aspects = Aspect::get();
        $card_traits = CardTrait::get();
        $arenas = Arena::get();
        $keywords = Keyword::get();

        foreach ($cards as $card) {
            $new_card = Card::create([
                'card_number'       => $card['card_number'],
                'cost'        => $card['cost'],
                'set_id'        => $card['set_id'],
                'name'        => $card['name'],
                'card_type'        => $card['card_type'],
                'subtitle'        => array_key_exists('subtitle', $card)
                    ? $card['subtitle']
                    : null,
                'power'        => $card['power'],
                'hp'        => $card['hp'],
                'front_text'        => $card['front_text'],
                'double_sided'        => $card['double_sided'],
                'rarity'        => $card['rarity'],
                'unique'        => $card['unique'],
                'artist'        => $card['artist'],
                'front_art'        => $card['front_art'],
                'back_text'        => array_key_exists('back_text', $card)
                    ? $card['back_text']
                    : null,
                'back_art'        => array_key_exists('back_art', $card)
                    ? $card['back_art']
                    : null,
            ]);

            if (array_key_exists('aspects', $card)) {
                foreach ($card['aspects'] as $aspect_name) {
                    $aspect_index = $aspects->search(function ($object) use ($aspect_name) {
                        return $object['name'] == $aspect_name;
                    });
                    $new_card->aspects()->attach($aspects[$aspect_index]['id']);
                }
            }

            if (array_key_exists('card_traits', $card)) {
                foreach ($card['card_traits'] as $card_trait_name) {
                    $trait_index = $card_traits->search(function ($object) use ($card_trait_name) {
                        return $object['name'] == $card_trait_name;
                    });
                    $new_card->cardTraits()->attach($card_traits[$trait_index]['id']);
                }
            }

            if (array_key_exists('keywords', $card)) {

                foreach ($card['keywords'] as $keyword_name) {
                    $keyword_index = $keywords->search(function ($object) use ($keyword_name) {
                        return $object['name'] == $keyword_name;
                    });
                    $new_card->keywords()->attach($keywords[$keyword_index]['id']);
                }
            }

            if (array_key_exists('arenas', $card)) {
                foreach ($card['arenas'] as $arena_name) {
                    $arena_index = $arenas->search(function ($object) use ($arena_name) {
                        return $object['name'] == $arena_name;
                    });
                    $new_card->arenas()->attach($arenas[$arena_index]['id']);
                }
            }
        }
    }
}
