<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
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
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password123'),  // Don't forget to hash the password
            'role' => 'admin',  // Admin role
        ]);
    
        User::create([
            'name' => 'User',
            'email' => 'user@gmial.com',
            'password' => Hash::make('password123'),
            'role' => 'user',  // User role
        ]);
    }
    
}
