<?php

namespace App\Http\Controllers;

use App\Models\Filial;
use App\Models\Mecanico;
use App\Models\User;
use Illuminate\Http\Request;

class MecanicoController extends Controller
{

    public function index()
    {
        $mecanicos = Mecanico::with('user')
            ->where('filial_id', auth()->user()->filial_id)
            ->paginate(15);

        $mecanicos_count = Mecanico::with('user')
            ->where('filial_id', auth()->user()->filial_id)->count();


        return view('mecanicos.index', compact('mecanicos', 'mecanicos_count'));;
    }

    public function create()
    {

        $filiais = Filial::all();

        return view('mecanicos.create', ['filiais' => $filiais]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'filial_id' => 'required',
            'nome_mecanico' => 'required',
            'telefone_mecanico' => 'required|string|max:20',
            'especialidade' => 'nullable|string|max:100'
        ]);

        Mecanico::create($validated);

        return redirect()->route('mecanicos.index')->with('success', 'Mecânico cadastrado com sucesso.');
    }

    public function edit(Mecanico $mecanico)
    {
        $this->authorizeMecanico($mecanico);

        $users = User::where('filial_id', auth()->user()->filial_id)->get();

        return view('mecanicos.edit', compact('mecanico', 'users'));
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(Request $request)
    {
        $mecanico = Mecanico::find($request->id);
        $mecanico->delete();

        return redirect()->route('mecanicos.index');
    }
}
