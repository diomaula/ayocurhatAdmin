<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i=0;$i<15;$i++){
            $input = ['admin','editor','author'];
            $rand_keys = array_rand($input);
            $data[$i] = [
               'name' => $faker->name,
               'email' => $faker->unique()->safeEmail,
               'email_verified_at' => now(),
               'password' => bcrypt('password'),
               'remember_token' => Str::random(10),
               'role' => $input[$rand_keys],
            ];
        }
        
        DB::table('users')->insert($data);
      }
    
}
