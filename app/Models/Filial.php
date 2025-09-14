<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filial extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'endereco', 'telefone'];

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function mecanicos()
    {
        return $this->hasMany(Mecanico::class);
    }

    public function agendamentos()
    {
        return $this->hasMany(Agendamento::class);
    }

    public function pedidosOrigem()
    {
        return $this->hasMany(Pedido::class, 'filial_origem_id');
    }

    public function pedidosDestino()
    {
        return $this->hasMany(Pedido::class, 'filial_destino_id');
    }
}
