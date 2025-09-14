<?php

namespace Database\Seeders;

use App\Models\Filial;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Filial::factory()->create([
            'nome' => 'FR Pneus Vila Rica',
            'endereco' => 'Rua dos Pneus 123',
            'cidade' => 'Vila Rica',
            'telefone' => '66 3554-1474',

        ]);

        User::factory()->create([
            'name' => 'Eliton Campos',
            'email' => 'eliton.pecas@gmail.com',
            'password' => bcrypt('35647982'),
            'filial_id' => 1,
            'remember_token' => '',
        ]);
    }
}
