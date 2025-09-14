<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mecanico extends Model
{
    use hasFactory;

    protected $fillable = ['filial_id', 'nome_mecanico','telefone_mecanico', 'especialidade'];

    public function filial()
    {
        return $this->belongsTo(Filial::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function agendamentos()
    {
        return $this->hasMany(Agendamento::class);
    }
}
