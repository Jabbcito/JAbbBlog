<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Josue Andre Bringas Beltran',
            'email' => 'jabb@gmail.com',
            'password' => bcrypt('andres123')
        ])->assignRole('Admin');
        User::factory(30)->create();
    }
}
