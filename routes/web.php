<?php

use App\Http\Controllers\annexeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\VehiculeController;
use App\Models\Vehicule;
use Illuminate\Support\Facades\Route;

Route::get('/Accueil', [VehiculeController::class, 'index']);

Route::get('/cueil', function () {
    $voitures = Vehicule::all();
    return view('vehicules.index',compact('voitures'));
});

// definition des routes pour l'authentification

route::get('register', [AuthController::class, 'register'])->name('register');
route::post('create_user', [AuthController::class, 'create_user'])->name('create_user');

route::get('/', [AuthController::class, 'login'])->name('login'); route::post('logins', [AuthController::class, 'logins'])->name('logins');


Route::get('vehicules', [VehiculeController::class, 'index'])->name('vehicules.index');
Route::get('vehicules/create', [VehiculeController::class, 'create'])->name('vehicules.create');
Route::post('vehicules', [VehiculeController::class, 'store'])->name('vehicules.store');
Route::get('vehicules/{vehicule}', [VehiculeController::class, 'show'])->name('vehicules.show');
Route::get('vehicules/{vehicule}/edit', [VehiculeController::class, 'edit'])->name('vehicules.edit');
Route::put('vehicules/{vehicule}', [VehiculeController::class, 'update'])->name('vehicules.update');
Route::delete('vehicules/{vehicule}', [VehiculeController::class, 'destroy'])->name('vehicules.destroy');





Route::get('/annexes', [annexeController::class, 'index'])->name('annexes.index');
Route::get('annexes/create', [annexeController::class, 'create'])->name('annexes.create');
Route::post('annexes', [annexeController::class, 'store'])->name('annexes.store');
Route::get('annexes/{annexe}', [annexeController::class, 'show'])->name('annexes.show');
Route::get('annexes/{annexe}/edit', [annexeController::class, 'edit'])->name('annexes.edit');
Route::put('annexes/{annexe}', [annexeController::class, 'update'])->name('annexes.update');
Route::delete('annexes/{annexe}', [annexeController::class, 'destroy'])->name('annexes.destroy');
