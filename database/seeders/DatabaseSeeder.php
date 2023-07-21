<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
      $faker = Faker::create();
      
      $role = ['user', 'admin'];
      shuffle($role);
      
      foreach(range(1, 15) as $index) {
        User::create([
          'name' => $faker->name,
          'email' => $faker->email,
          'password' => Hash::make(Str::random(length:15)),
          'role' => $role[0],
          ]);
      }
      
      
      // foreach(range(1, 15) as $index) {
      //   DB::table('users')->insert([
      //     'name' => $faker->name,
      //     'email' => $faker->email,
      //     'password' => Hash::make(Str::random(length:15)),
      //     'role' => $role[0],
      //     ]);
      // }
    }
}
