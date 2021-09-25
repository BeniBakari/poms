<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use DB;

class RolePermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('role_permissions')->insert([
            [
                
            ]
        ]);
    }
}
