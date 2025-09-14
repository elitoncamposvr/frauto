<?php

namespace Database\Factories;

use App\Models\Filial;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Filial>
 */
class FilialFactory extends Factory
{

    protected $model = Filial::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nome' => 'FR Pneus Vila Rica',
            'endereco' => 'Rua dos Pneus 123',
            'cidade' => 'Vila Rica',
            'telefone' => '66 3554-1474',
        ];
    }
}
