<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            "name" => "Administrador",
            "email" => "admin@admin.com",
            "password" => Hash::make('123456789'),
        ]);
        User::create([
            "name" => "Secretaria",
            "email" => "secretaria@admin.com",
            "password" => Hash::make('123456789'),
        ]);
        User::create([
            "name" => "Doctor1",
            "email" => "doc1@admin.com",
            "password" => Hash::make('123456789'),
        ]);
        User::create([
            "name" => "Doctor2",
            "email" => "doc2@admin.com",
            "password" => Hash::make('123456789'),
        ]);


        $this->call([PacienteSeeder::class]);
    }
}
