<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    protected $fillable = [
        'filial_origem_id',
        'filial_destino_id',
        'user_id',
        'descricao',
        'status',
    ];

    public function origem()
    {
        return $this->belongsTo(Filial::class, 'filial_origem_id');
    }

    public function destino()
    {
        return $this->belongsTo(Filial::class, 'filial_destino_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
