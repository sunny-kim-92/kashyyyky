<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SetSeeder extends Seeder
{
    private $sets = [["name" => "Spark of Rebellion", "id" => 1]];
    
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sets')->insert($this->sets);
    }
}
