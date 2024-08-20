<?php

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

    Route::resource('produtos', ProdutoController::class)
        ->names([
            'index' => 'produtos.index',
            'create' => 'produtos.create',
            'store' => 'produtos.store',
            'show' => 'produtos.show',
            'edit' => 'produtos.edit',
            'update' => 'produtos.update',
            'destroy' => 'produtos.destroy',
        ]);

});
