<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use DB;

use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'firstName' => "Beni",
                'lastName' => "John",
                'email' => 'admin@gmail.com',
                'phone' => '0734150011',
                'divisionId' => 1,
                'district_councilId' => 1,
                'gender' => "Male",
                'status' => "Active",
                'rankId' => 3,
                'roleId' => 1,
                'password' => Hash::make('12345678'),
            ],
            [
                'firstName' => "Innocent",
                'lastName' => "Mrema",
                'email' => 'i.mrema@gmail.com',
                'phone' => '0714180011',
                'divisionId' => 1,
                'district_councilId' => 1,
                'gender' => "Male",
                'status' => "Active",
                'rankId' => 1,
                'roleId' => 2,
                'password' => Hash::make('12345678'),

            ],
            [
                'firstName' => "Joshua",
                'lastName' => "Joshua",
                'email' => 'joshua@gmail.com',
                'phone' => '0712679255',
                'divisionId' => 1,
                'district_councilId' => 1,
                'gender' => "Male",
                'status' => "Active",
                'rankId' => 3,
                'roleId' => 3,
                'password' => Hash::make('12345678'),
            ],
            [
                'firstName' => "Hamisi",
                'lastName' => "Juma",
                'email' => 'hamisijuma@gmail.com',
                'phone' => '0654189901',
                'divisionId' => 1,
                'district_councilId' => 1,
                'gender' => "Male",
                'status' => "Active",
                'rankId' => 3,
                'roleId' => 4,
                'password' => Hash::make('12345678'),
            ]  
        ]);
    }
}
