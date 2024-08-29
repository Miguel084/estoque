<?php

namespace App\Http\Controllers;

use App\Http\Requests\PedidoDeCompraRequest;
use App\Models\PedidoDeCompra;

class PedidoDeCompraController extends Controller
{
    public function index()
    {
        return PedidoDeCompra::all();
    }

    public function store(PedidoDeCompraRequest $request)
    {
        return PedidoDeCompra::create($request->validated());
    }

    public function show(PedidoDeCompra $pedidoDeCompra)
    {
        return $pedidoDeCompra;
    }

    public function update(PedidoDeCompraRequest $request, PedidoDeCompra $pedidoDeCompra)
    {
        $pedidoDeCompra->update($request->validated());

        return $pedidoDeCompra;
    }

    public function destroy(PedidoDeCompra $pedidoDeCompra)
    {
        $pedidoDeCompra->delete();

        return response()->json();
    }
}
