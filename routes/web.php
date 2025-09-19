<?php

use App\Http\Controllers\AgendamentoController;
use App\Http\Controllers\MecanicoController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(callback: function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/mecanicos', [MecanicoController::class, 'index'])->name('mecanicos.index');
    Route::get('/mecanicos/create', [MecanicoController::class, 'create'])->name('mecanicos.create');
    Route::post('/mecanicos/store', [MecanicoController::class, 'store'])->name('mecanicos.store');
    Route::get('/mecanicos/{id}/edit', [MecanicoController::class, 'edit'])->name('mecanicos.edit');
    Route::put('/mecanicos/{id}/update', [MecanicoController::class, 'update'])->name('mecanicos.update');
    Route::delete('/mecanicos/{id}/destroy', [MecanicoController::class, 'destroy'])->name('mecanicos.destroy');
    Route::get('/mecanicos/{id}/show', [MecanicoController::class, 'show'])->name('mecanicos.show');

    Route::get('/pedidos', [PedidoController::class, 'index'])->name('pedidos.index');


    Route::get('/agendamentos', [AgendamentoController::class, 'index'])->name('agendamentos.index');

});

require __DIR__.'/auth.php';
