<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index',[
            'agendamentosCount' => Agendamento::where('filial_id', auth()->user()->filial_id)->count(),
            'mecanicosCount' => Mecanico::where('filial_id', auth()->user()->filial_id)->count(),
            'pedidosCount' => Pedido::where('filial_origem_id', auth()->user()->filial_id)->orWhere('filial_destino_id', auth()->user()->filial_id)->count(),
        ]);
    }
}
