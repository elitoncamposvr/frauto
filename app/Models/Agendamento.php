<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agendamento extends Model
{
    use hasFactory;

    protected $fillable = [
        'filial_id',
        'mecanico_id',
        'cliente_nome',
        'cliente_telefone',
        'data',
        'hora',
        'descricao',
        'status',
    ];

    public function filial()
    {
        return $this->belongsTo(Filial::class);
    }

    public function mecanico()
    {
        return $this->belongsTo(Mecanico::class);
    }
}
