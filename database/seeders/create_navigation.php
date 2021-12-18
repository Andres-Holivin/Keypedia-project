<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class create_navigation extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('navigation')->insert([
            'name'=>'Add Keyboard',
            'path'=>'/Keyboard/Add',
            'role_id'=>'2'
        ]);
        DB::table('navigation')->insert([
            'name'=>'Manage Category',
            'path'=>'/Category/Manage',
            'role_id'=>'2'
        ]);
        DB::table('navigation')->insert([
            'name'=>'My Cart',
            'path'=>'/MyCart',
            'role_id'=>'1'
        ]);
        DB::table('navigation')->insert([
            'name'=>'Transaction History',
            'path'=>'/Transaction',
            'role_id'=>'1'
        ]);
    }
}
