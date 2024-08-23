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
        $hoje = Carbon::today();
        $pedidoDeVendaProduto = PedidoDeVenda::with('produto')->get();
        $pedidoDeVendaCategoria = PedidoDeVenda::with('produto.categoria')->get();



        $valores = [
            'totalPedidos' => $pedidoDeVendaProduto->count(),
            'total' => $pedidoDeVendaProduto->sum('produto.preco'),
            'totalEstoque' => $pedidoDeVendaProduto->unique('produto_id')->sum('produto.quantidade'),
            'vendasPorCategoria' => $pedidoDeVendaCategoria->groupBy('produto.categoria.nome')->map(function ($item) {
                return [
                    'nome' => $item->first()->produto->categoria->nome,
                    'quantidade' => $item->count('produto_id'),
                    'data' => Carbon::now()->toDateString(),
                ];
            }),
        ];
        return view('dashboard', compact('valores'));
    }
}
