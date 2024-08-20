<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProdutosRequest;
use App\Models\Produtos;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index()
    {
        $produtos = Produtos::paginate(10);
        return view('produtos.index', compact('produtos'));
    }

    public function create()
    {
        return view('produtos.create');
    }

    public function store(ProdutosRequest $request)
    {
        Produtos::create($request->all());
        return redirect()->route('produtos.index');
    }

    public function show($id)
    {
    }

    public function edit($id)
    {
        $produto = Produtos::find($id);
        return view('produtos.edit', compact('produto'));
    }

    public function update(ProdutosRequest $request, $id)
    {
        $produto = Produtos::find($id);
        $produto->update($request->all());
        return redirect()->route('produtos.index');
    }

    public function destroy($id)
    {
        $produto = Produtos::find($id);
        $produto->delete();
        return redirect()->route('produtos.index');

    }
}
