<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            [
            'roleTitle' => "Admin",
            'roleDesc' => "System Administration"
            ],
            [
                'roleTitle' => "DAHRAM",
                'roleDesc' => "Approving and disaproving request"
            ],
            [
                'roleTitle' => "Supervisor",
                'roleDesc' => "Approving and disaproving request"
            ],
            [
                'roleTitle' => "User",
                'roleDesc' => "Normal user"
            ]
    ]);
    }
}
