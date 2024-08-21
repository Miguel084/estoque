<?php

namespace App\Http\Controllers;

use App\Http\Requests\pedidoDeCompraRequest;
use App\Models\PedidoDeCompra;

class pedidoDeCompraController extends Controller
{
    public function index()
    {
        return PedidoDeCompra::all();
    }

    public function store(pedidoDeCompraRequest $request)
    {
        return PedidoDeCompra::create($request->validated());
    }

    public function show(PedidoDeCompra $pedidoDeCompra)
    {
        return $pedidoDeCompra;
    }

    public function update(pedidoDeCompraRequest $request, PedidoDeCompra $pedidoDeCompra)
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
