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
            'image'=>'https://res.cloudinary.com/holivin21/image/upload/v1642925180/Keypedia/keyboard2_pyjrjv.png',
        ]);
        DB::table('category')->insert([
            'name'=>'Keyboard TKL',
            'image'=>'https://res.cloudinary.com/holivin21/image/upload/v1642925197/Keypedia/keyboard7_qcatlw.png',
        ]);
        DB::table('category')->insert([
            'name'=>'Keyboard 60%',
            'image'=>'https://res.cloudinary.com/holivin21/image/upload/v1642925183/Keypedia/keyboard4_arkiuk.png',
        ]);
    }
}
