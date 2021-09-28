<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use DB;

class RanksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ranks')->insert([
            [
               'rankName' => "Director",
                'rankDesc' => ""  
            ],
            [
                'rankName' => "Supervisor",
                'rankDesc' => "" 
            ],
            [
                'rankName' => "ICT Operating Officer",
                'rankDesc' => "" 
            ]
        ]);
    }
}
