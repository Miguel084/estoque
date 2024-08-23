<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProdutoRequest;
use App\Models\Categoria;
use App\Models\Produto;

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
        return redirect()->route('produtos.index')->with('success', 'O produto foi criado com sucesso.');
    }

    public function show($id)
    {
    }

    public function edit($id)
    {
        $produto = Produto::find($id);
        $categorias = Categoria::all();
        return view('produtos.edit', compact('produto', 'categorias'));
    }

    public function update(ProdutoRequest $request, $id)
    {
        $produto = Produto::find($id);
        $produto->update($request->all());

        return redirect()->route('produtos.index')->with('success', 'O produto foi atualizado com sucesso.');
    }

    public function destroy($id)
    {
        $produto = Produto::find($id);
        try {
            $produto->delete();
            return redirect()->route('produtos.index')->with('success', 'O produto foi excluído com sucesso.');
        } catch (\Exception $e) {
            return redirect()->route('produtos.index')->with('error', 'Não foi possível excluir o produto.');
        }

    }
}
