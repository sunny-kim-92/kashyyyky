<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AspectSeeder extends Seeder
{
    private $aspects = [
        [
            "name" => "Vigilance",
            "color" => "Blue"
        ],
        [
            "name" => "Command",
            "color" => "Green"
        ],
        [
            "name" => "Aggression",
            "color" => "Red"
        ],
        [
            "name" => "Cunning",
            "color" => "Yellow"
        ],
        [
            "name" => "Heroism",
            "color" => "White"
        ],
        [
            "name" => "Villainy",
            "color" => "Black"
        ]
    ];
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('aspects')->insert($this->aspects);
    }
}
