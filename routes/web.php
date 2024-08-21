<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\ProdutoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {

    Route::resource('dashboard', DashboardController::class)
        ->only(['index'])
        ->names([
            'index' => 'dashboard'
        ]);

    Route::resource('produtos', ProdutoController::class);

    Route::resource('categorias', CategoriaController::class);

});
