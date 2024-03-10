<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KeywordSeeder extends Seeder
{
    private $keywords = [
        [
            "name" => "Ambush",
            "description" => "After you play this unit, it may ready and attack an enemy unit. This unit doesn’t ready if there are no enemy units to attack."
        ],
        [
            "name" => "Grit",
            "description" => "This unit gets +1/+0 for each damage on it."
        ],
        [
            "name" => "Overwhelm",
            "description" => "When this unit deals damage to an enemy unit while attacking, deal excess damage to that opponent’s base."
        ],
        [
            "name" => "Raid",
            "description" => "While this unit is attacking, it gets extra power equal to the Raid value."
        ],
        [
            "name" => "Restore",
            "description" => "When this unit attacks, heal damage from your base equal to the Restore value (before dealing damage)."
        ],
        [
            "name" => "Saboteur",
            "description" => "When this unit attacks, ignore the Sentinel keyword on enemy units and defeat all Shield tokens on the defender (before dealing damage)."
        ],
        [
            "name" => "Sentinel",
            "description" => "Enemy units in the same arena (ground or space) as this unit can’t attack your non-Sentinel units in this arena or your base. If you have multiple units with Sentinel in the same arena, your opponent may choose which of those units to attack."
        ],
        [
            "name" => "Shielded",
            "description" => "When you play this unit, give a Shield token to it. If any amount of damage would be dealt to a unit with a Shield token on it, prevent that damage and defeat 1 Shield token on that unit."
        ]
        ];
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('keywords')->insert($this->keywords);
    }
}
