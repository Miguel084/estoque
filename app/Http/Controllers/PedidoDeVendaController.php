<?php

namespace App\Http\Controllers;

use App\Http\Requests\PedidoDeVendaRequest;
use App\Models\PedidoDeVenda;
use App\Models\Produto;

class PedidoDeVendaController extends Controller
{
    public function index()
    {
        return view('pedido-de-venda.index', [
            'pedidos' => PedidoDeVenda::paginate(10)
        ]);
    }

    public function create()
    {
        $produtos = Produto::all()->where('quantidade', '>', 0);
        return view('pedido-de-venda.create', compact('produtos'));
    }

    public function store(PedidoDeVendaRequest $request)
    {
        $produto = Produto::find($request->produto_id);
        $pedido = PedidoDeVenda::create($request->validated());

        $pedido->produto()->associate($produto);
        if ($produto->quantidade < 1) {
            return redirect()->route('pedido-de-venda.create')->with('error', 'Produto sem estoque');
        }

        $produto->quantidade -= 1;
        $pedido->save();
        $produto->save();


        return redirect()->route('pedido-de-venda.index')->with('success', 'Pedido de venda criado com sucesso');
    }

    public function show(PedidoDeVenda $pedidoDeVenda)
    {
        return $pedidoDeVenda;
    }

    public function edit(PedidoDeVenda $pedidoDeVenda)
    {
        $produtos = Produto::all();
        return view('pedido-de-venda.edit', compact('pedidoDeVenda', 'produtos'));
    }

    public function update(PedidoDeVendaRequest $request, PedidoDeVenda $pedidoDeVenda)
    {
        $pedidoDeVenda->update($request->validated());

        return redirect()->route('pedido-de-venda.index')->with('success', 'Pedido de venda atualizado com sucesso');
    }

    public function destroy(PedidoDeVenda $pedidoDeVenda)
    {
        $pedidoDeVenda->delete();

        return redirect()->route('pedido-de-venda.index')->with('success', 'Pedido de venda excluído com sucesso');
    }
}
