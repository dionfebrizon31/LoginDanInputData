<?php

namespace Database\Seeders;

use App\Models\user;
// use Illuminate\Database\Console\Seeds\WithouphptModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        user::factory()->create([
            'nama' => 'dion',
            'password' => Hash::make('dion'),
            'username' => 'dion' // jika Anda menggunakan kolom username
        ]);
    }
}
