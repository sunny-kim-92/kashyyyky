<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CardTraitSeeder extends Seeder
{
    private $card_traits = [
        [
            "name" => "Armor"
        ],
        [
            "name" => "Bounty Hunter"
        ],
        [
            "name" => "Capital Ship"
        ],
        [
            "name" => "Clone"
        ],
        [
            "name" => "Condition"
        ],
        [
            "name" => "Creature"
        ],
        [
            "name" => "Disaster"
        ],
        [
            "name" => "Droid"
        ],
        [
            "name" => "Fighter"
        ],
        [
            "name" => "Force"
        ],
        [
            "name" => "Fringe"
        ],
        [
            "name" => "Gambit"
        ],
        [
            "name" => "Hutt"
        ],
        [
            "name" => "Imperial"
        ],
        [
            "name" => "Innate"
        ],
        [
            "name" => "Inquisitor"
        ],
        [
            "name" => "Item"
        ],
        [
            "name" => "Jawa"
        ],
        [
            "name" => "Jedi"
        ],
        [
            "name" => "Law"
        ],
        [
            "name" => "Learned"
        ],
        [
            "name" => "Lightsaber"
        ],
        [
            "name" => "Mandalorian"
        ],
        [
            "name" => "Modification"
        ],
        [
            "name" => "New Republic"
        ],
        [
            "name" => "Official"
        ],
        [
            "name" => "Plan"
        ],
        [
            "name" => "Rebel"
        ],
        [
            "name" => "Republic"
        ],
        [
            "name" => "Resistance"
        ],
        [
            "name" => "Separatist"
        ],
        [
            "name" => "Sith"
        ],
        [
            "name" => "Spectre"
        ],
        [
            "name" => "Speeder"
        ],
        [
            "name" => "Supply"
        ],
        [
            "name" => "Tactic"
        ],
        [
            "name" => "Tank"
        ],
        [
            "name" => "Transport"
        ],
        [
            "name" => "Trick"
        ],
        [
            "name" => "Trooper"
        ],
        [
            "name" => "Twi'lek"
        ],
        [
            "name" => "Underworld"
        ],
        [
            "name" => "Vehicle"
        ],
        [
            "name" => "Walker"
        ],
        [
            "name" => "Weapon"
        ],
        [
            "name" => "Wookiee"
        ]
        ];
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('card_traits')->insert($this->card_traits);
    }
}
