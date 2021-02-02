<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('user')->insert([
            [
                'name'=>'SuperAdmin',
                "email"=>"superadmin@demo.com",
                "password"=>Hash::make('12345'),
                'role'=>'admin'
            ],
            [
                'name'=>'farmer',
                "email"=>"farmer@demo.com",
                "password"=>Hash::make('12345'),
                'role'=>'farmer'
            ],
            [
                'name'=>'buyer',
                "email"=>"buyer@demo.com",
                "password"=>Hash::make('12345'),
                'role'=>'buyer'
            ]
        ]);
    }
}
