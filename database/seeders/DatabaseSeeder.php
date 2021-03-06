<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(10)->create();
        $this->call(SchoolSeeder::class);
        $this->call(GrupoSeeder::class);
        $this->call(MenuSeeder::class);
        $this->call(UserSeeder::class);
    }
}
