<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(
           [
            'name'=>'portfolio',
            'email'=>'my@my.com',
            'password'=> Hash::make('123456789'),
           ]
            
        );              

    }
}
