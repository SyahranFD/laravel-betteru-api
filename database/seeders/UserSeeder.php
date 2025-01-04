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
        // User Rey
        User::create([
            'name' => 'Rey',
            'email' => 'rey@gmail.com',
            'password' => Hash::make('reypass'),
            'date_of_birth' => '2004-12-12',
            'age' => 21,
            'gender' => 'Laki Laki',
            'goals' => 'Menaikkan Berat Badan Ekstrim',
            'weight' => 60,
            'height' => 168,
            'activity_level' => 'Sangat Jarang Beraktivitas',
            'is_verified_email' => true,
        ]);
    }
}
