<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(create_role::class);
        $this->call(create_navigation::class);
        $this->call(create_user::class);
        $this->call(create_category::class);
        $this->call(create_keyboard::class);
    }
}
