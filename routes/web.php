<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\PedidoDeVendaController;
use App\Http\Controllers\ProdutoController;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;
use Laravel\Fortify\Http\Controllers\RegisteredUserController;
use Laravel\Fortify\RoutePath;

Route::get('/', function () {
    return view('auth.login');
});

Route::post(RoutePath::for('register', '/register'), [\App\Http\Controllers\Auth\RegisterController::class, 'store'])
    ->middleware(['guest'])
    ->name('register');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {

    Route::resource('dashboard', DashboardController::class)
        ->only(['index'])
        ->names([
            'index' => 'dashboard'
        ]);

    Route::resource('produtos', ProdutoController::class);

    Route::resource('categorias', CategoriaController::class);

    Route::resource('pedido-de-venda', PedidoDeVendaController::class);


});
