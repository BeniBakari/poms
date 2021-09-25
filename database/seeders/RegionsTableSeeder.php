<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use DB;

class RegionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('regions')->insert([
            [
                'regionName' => "ARUSHA"
            ],
            [
                'regionName' => "MBEYA"
            ],
            [
                'regionName' => "TANGA"
            ],
            [
                'regionName' => "KILIMANJARO"
            ],
            [
                'regionName' => "MANAYARA"
            ],
            [
                'regionName' => "DODOMA"
            ],
            [
                'regionName' => "SINGIDA"
            ],
            [
                'regionName' => "KATAVI"
            ],
            [
                'regionName' => "IRINGA"
            ],
            [
                'regionName' => "MOROGORO"
            ],
            [
                'regionName' => "MTWARA"
            ],
            [
                'regionName' => "SIMIYU"
            ],
            [
                'regionName' => "MWANZA"
            ],
            [
                'regionName' => "RUVUMA"
            ],
            [
                'regionName' => "KAGERA"
            ],
            [
                'regionName' => "PWANI"
            ],
            [
                'regionName' => "KIGOMA"
            ]
        ]);
    }
}
