<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class create_user extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user')->insert([
            'username'=>'Customer0001',
            'email'=>'Customer0001@gmail.com',
            'password'=>Hash::make('123456789'),
            'remember_token'=>null,
            'address'=>'no street no street no street no street',
            'gender'=>'Male',
            'DOB'=>'1999-02-01',
            'role_id'=>'1'
        ]);
        DB::table('user')->insert([
            'username'=>'Manager0001',
            'email'=>'Manager0001@gmail.com',
            'password'=>Hash::make('123456789'),
            'remember_token'=>null,
            'address'=>'no street no street no street no street',
            'gender'=>'Female',
            'DOB'=>'1999-02-01',
            'role_id'=>'2'
        ]);
    }
}
