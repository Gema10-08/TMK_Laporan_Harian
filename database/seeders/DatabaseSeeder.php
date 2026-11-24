<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['username' => 'agus.setiawan'],
            [
                'name' => 'Agus Setiawan',
                'email' => 'agus@karimun.go.id',
                'password' => Hash::make('password123'),
            ]
        );
    }
}