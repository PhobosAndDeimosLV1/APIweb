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
        \App\Models\Usuario::factory(5)->create();

        // \App\Models\Usuario::factory()->create([
        //     'cpf' => '',
        //     'name' => 'Tutoriel',
        //     'email' => 'test@example.com',
        // ]);
    }
}
