<?php

namespace App\Http\Controllers;

use App\Http\Requests\pedidoDeCompraRequest;
use App\Models\pedidos_deCompra;

class pedidos_de_compraController extends Controller
{
    public function index()
    {
        return pedidos_deCompra::all();
    }

    public function store(pedidoDeCompraRequest $request)
    {
        return pedidos_deCompra::create($request->validated());
    }

    public function show(pedidos_deCompra $pedidos_de_compra)
    {
        return $pedidos_de_compra;
    }

    public function update(pedidoDeCompraRequest $request, pedidos_deCompra $pedidos_de_compra)
    {
        $pedidos_de_compra->update($request->validated());

        return $pedidos_de_compra;
    }

    public function destroy(pedidos_deCompra $pedidos_de_compra)
    {
        $pedidos_de_compra->delete();

        return response()->json();
    }
}
