<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class create_category extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category')->insert([
            'name'=>'Keyboard Full Size',
            'image'=>'storage/keyboard2.png',
        ]);
        DB::table('category')->insert([
            'name'=>'Keyboard TKL',
            'image'=>'storage/keyboard7.png',
        ]);
        DB::table('category')->insert([
            'name'=>'Keyboard 60%',
            'image'=>'storage/keyboard4.png',
        ]);
    }
}
