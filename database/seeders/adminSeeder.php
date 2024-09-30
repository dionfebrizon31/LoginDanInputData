<?php

namespace Database\Seeders;

use App\Models\admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class adminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        admin::factory()->create([
            'nama' => 'dion',
            'password' => Hash::make('dion'),
            'username' => 'dion' // jika Anda menggunakan kolom username
        ]);
    }
}
