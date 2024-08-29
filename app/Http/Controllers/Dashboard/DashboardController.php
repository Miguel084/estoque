<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use App\Models\PedidoDeVenda;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $hoje = Carbon::today()->format('Y-m-d');
        $mes = Carbon::now()->startOfMonth()->format('Y-m-d');
        $ano = Carbon::now()->startOfYear()->format('Y-m-d');

        $pedidoDeVendaProduto = PedidoDeVenda::with('produto')->where('loja_id', auth()->user()->loja_id);
        $pedidoDeVendaCategoria = PedidoDeVenda::with('produto.categoria')->where('loja_id', auth()->user()->loja_id);

        $valoresHoje = $this->calcularValores(clone $pedidoDeVendaProduto, clone $pedidoDeVendaCategoria, $hoje, $hoje);
        $valoresMes = $this->calcularValores(clone $pedidoDeVendaProduto, clone $pedidoDeVendaCategoria, $mes, $hoje);
        $valoresAno = $this->calcularValores(clone $pedidoDeVendaProduto, clone $pedidoDeVendaCategoria, $ano, $hoje);

        return view('dashboard', compact('valoresHoje', 'valoresMes', 'valoresAno'));
    }

    private function calcularValores($pedidoDeVendaProduto, $pedidoDeVendaCategoria, $inicio, $fim)
    {
        $pedidos = $pedidoDeVendaProduto->whereBetween('data_do_pedido', [$inicio, $fim])->get();

        $pedidosPorCategoria = $pedidoDeVendaCategoria->whereBetween('data_do_pedido', [$inicio, $fim])->get();

        $totalPedidos = $pedidos->count();

        $total = $pedidos->sum(function($pedido) {
            return $pedido->produto->preco;
        });

        $totalEstoque = $pedidos->unique('produto_id')->sum(function($pedido) {
            return $pedido->produto->quantidade;
        });

        $vendasPorCategoria = $pedidosPorCategoria->groupBy(function($pedido) {
            return $pedido->produto->categoria->nome;
        })->map(function($item) {
            return [
                'nome' => $item->first()->produto->categoria->nome,
                'quantidade' => $item->count('produto_id'),
                'data' => Carbon::now()->toDateString(),
            ];
        });

        return [
            'totalPedidos' => $totalPedidos,
            'total' => $total,
            'totalEstoque' => $totalEstoque,
            'vendasPorCategoria' => $vendasPorCategoria,
        ];
    }
}
