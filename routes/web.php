<?php

use App\Http\Controllers\ProvedorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CamioneroController;

Route::get('/', function () {
    return to_route('provedor.index');
});
// Rutas para Camioneros
Route::get('camioneros/listar', [CamioneroController::class, 'index'])->name('camionero.index');
Route::get('camionero/create', [CamioneroController::class, 'create']);
Route::post('camionero/store', [CamioneroController::class, 'store'])->name('camionero.store');
Route::get('camionero/{camionero}', [CamioneroController::class, 'show'])->name('camionero.show');
Route::get('camionero/{camionero}/editar', [CamioneroController::class, 'edit'])->name('camionero.edit');
Route::put('camionero/{camionero}', [CamioneroController::class, 'update'])->name('camionero.update');
Route::delete('camionero/{camionero}', [CamioneroController::class, 'destroy'])->name('camionero.destroy');


Route::get('/provedor',[ProvedorController::class,'index'])->name('provedor.index');
Route::get('/provedor/create',[ProvedorController::class,'create'])->name('provedor.create');
Route::post('/provedor/store',[ProvedorController::class,'store'])->name('provedor.store');
Route::get('/provedor/edit/{id}',[ProvedorController::class,'edit'])->name('provedor.edit');
Route::put('/provedor/update/{id}',[ProvedorController::class,'update'])->name('provedor.update');

// Route::get('/provedor/delete/{id}', function ($id) {
//     return view('provedor.confirmacion',compact('id'));
// })->name('provedor.delete');

Route::delete('/provedor/destroy/{id}', [ProvedorController::class,'destroy'])->name('provedor.destroy');