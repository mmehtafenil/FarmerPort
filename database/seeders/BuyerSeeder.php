<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class BuyerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('buyer')->insert([
            'name'=>'Farmer Demo',
            "email"=>"farmer@demo.com",
            "password"=>Hash::make('12345'),
            "address"=>"Rajkot, Gujarat"
        ]);
}
}
