<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'apalah',
            'username' => 'app',
            'email' => 'app@gmail.com',
            'password' => Hash::make('qwertyuiop'),
            'birth_place' => 'Pinrang',  
            'birth_date' => '2024-06-05',      
            'gender' => 'female',                
            'phone' => '085456789780'            
        ]);
    }
}
