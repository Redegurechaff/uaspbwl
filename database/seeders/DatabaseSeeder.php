<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Muhammad Raihan',
            'email' => 'mraihanat03@gmail.com',
            'password' => Hash::make('1234567'),
            'user_alamat' => 'Tuntungan',
            'user_hp' => '081376290051' ,
            'user_pos' => '22123',
            'user_role' => '1',
            'user_aktif' => '1',
         ]); 
    }
}
