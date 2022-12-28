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
  
        $this->call(ProjectSeeder::class);
        $this->call(SkillSeeder::class);
        $this->call(ContactInfoSeeder::class);
        $this->call(UserSeeder::class);
    }
}
