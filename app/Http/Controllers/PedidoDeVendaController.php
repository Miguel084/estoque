<?php

namespace App\Http\Controllers;

use App\Http\Requests\PedidoDeVendaRequest;
use App\Models\PedidoDeVenda;

class PedidoDeVendaController extends Controller
{
    public function index()
    {
        return PedidoDeVenda::all();
    }

    public function store(PedidoDeVendaRequest $request)
    {
        return PedidoDeVenda::create($request->validated());
    }

    public function show(PedidoDeVenda $pedidoDeVenda)
    {
        return $pedidoDeVenda;
    }

    public function update(PedidoDeVendaRequest $request, PedidoDeVenda $pedidoDeVenda)
    {
        $pedidoDeVenda->update($request->validated());

        return $pedidoDeVenda;
    }

    public function destroy(PedidoDeVenda $pedidoDeVenda)
    {
        $pedidoDeVenda->delete();

        return response()->json();
    }
}
