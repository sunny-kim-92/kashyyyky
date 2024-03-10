<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArenaSeeder extends Seeder
{
    private $arenas = [
        [
            'name' => 'Ground'
        ], [
            'name' => 'Space'
        ]
    ];
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('arenas')->insert($this->arenas);
    }
}
