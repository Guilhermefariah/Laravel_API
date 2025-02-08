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
        if (!User::where("email", "joao@gmail.com")->first()) {
            $superAdmin = User::create([
                'name' => 'João',
                'email' => 'joao@gmail.com',
                'password' => Hash::make('123456', ['rounds' => 12]),
            ]);
        }

        if (!User::where("email", "maria@gmail.com")->first()) {
            $superAdmin = User::create([
                'name' => 'Maria',
                'email' => 'maria@gmail.com',
                'password' => Hash::make('123456', ['rounds' => 12]),
            ]);
        }

        if (!User::where("email", "pedro@gmail.com")->first()) {
            $superAdmin = User::create([
                'name' => 'Pedro',
                'email' => 'pedro@gmail.com',
                'password' => Hash::make('123456', ['rounds' => 12]),
            ]);
        }

        if (!User::where("email", "jose@gmail.com")->first()) {
            $superAdmin = User::create([
                'name' => 'José',
                'email' => 'jose@gmail.com',
                'password' => Hash::make('123456', ['rounds' => 12]),
            ]);
        }
    }
}
