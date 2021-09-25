<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use DB;

class DistrictsCouncilsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('district_councils')->insert([
            //Kilimanjaro
            [
                'districtName' => "Same",
                'regionId' => 4
            ],
            [
                'districtName' => "Mwanga",
                'regionId' => 4
            ],
            [
                'districtName' => "Rombo",
                'regionId' => 4
            ],
            [
                'districtName' => "Hai",
                'regionId' => 4
            ],
            [
                'districtName' => "Siha",
                'regionId' => 4
            ],
            //Arusha
            [
                'districtName' => "Arumeru",
                'regionId' => 1
            ],
            //Mbeya
            [
                'districtName' => "Rungwe",
                'regionId' => 2
            ],
            [
                'districtName' => "Tukuyu",
                'regionId' => 2
            ],

            [
                'districtName' => "Kyela",
                'regionId' => 2
            ],

            [
                'districtName' => "Mbarali",
                'regionId' => 2
            ],
            //Tanga

            [
                'districtName' => "Korogwe",
                'regionId' => 3
            ],
            [
                'districtName' => "Muheza",
                'regionId' => 3
            ],
            //Manyara
            [
                'districtName' => "Babati",
                'regionId' => 5
            ],
            [
                'districtName' => "Hanang",
                'regionId' => 5
            ],

            //mwanza
            [
                'districtName' => "Nyamagana",
                'regionId' => 13
            ],

        ]);
    }
}
