<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use DB;

class DivisionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('divisions')->insert([
            [
                'divisionTitle' => "DICT",
                'divisionDesc' => "Division of Information and Technology"
            ],
            [
                'divisionTitle' => "DUPT",
                'divisionDesc' => " "
            ]
        ]);
    }
}
