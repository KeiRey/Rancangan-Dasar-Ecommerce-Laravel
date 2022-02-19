<?php

namespace Database\Seeders;

use App\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	User::truncate();
    	User::create([
    		'name' => 'Keimal Reyyan',
    		'level' => 'admin',
    		'email' => 'keimal1@gmail.com',
    		'password' => bcrypt('12345'),
    		'remember_token' => Str::random(60)
    	]);

    }
}
