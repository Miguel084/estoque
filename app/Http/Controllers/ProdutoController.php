<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProdutoRequest;
use App\Models\Categoria;
use App\Models\Produto;
use App\Models\Produtos;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index()
    {
        $produtos = Produto::paginate(10);
        return view('produtos.index', compact('produtos'));
    }

    public function create()
    {
        $categorias = Categoria::all();
        return view('produtos..create', compact('categorias'));
    }

    public function store(ProdutoRequest $request)
    {
        Produto::create($request->all());
        return redirect()->route('produtos.index');
    }

    public function show($id)
    {
    }

    public function edit($id)
    {
        $produto = Produto::find($id);
        return view('produtos.edit', compact('produto'));
    }

    public function update(ProdutoRequest $request, $id)
    {
        $produto = Produto::find($id);
        $produto->update($request->all());
        return redirect()->route('produtos.index');
    }

    public function destroy($id)
    {
        $produto = Produto::find($id);
        $produto->delete();
        return redirect()->route('produtos.index');

    }
}
