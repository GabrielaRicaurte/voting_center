<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            ParticipantSeeder::class,
            CategorySeeder::class
       ]);

        \App\Models\User::factory()->create([
             'name' => 'admin',
             'email' => 'admin@email.com',
             'password' => 123456
        ]);

        \App\Models\User::factory()->create([
            'name' => 'user',
            'email' => 'user@email.com',
            'password' => 123456
       ]);
    }
}
