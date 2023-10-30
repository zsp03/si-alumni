<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */

    use WithoutModelEvents;
    public function run()
    {
        \App\Models\PenjaringAlumni::factory(100000)->create();

        //  \App\Models\User::factory()->create([
        //      'name' => 'Admin',
        //      'email' => 'admin@admin.com',
        //      'role' => '0',
        //  ]);
    }
}