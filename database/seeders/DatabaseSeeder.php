<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

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
            'name' => 'Ayomi Satria Pratama',
            'email' => 'ayomisatria@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('12345')
        ]);
        // \App\Models\User::factory(10)->create();
    }
}
