<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoriasRequest;
use App\Models\Categoria;
use Illuminate\Http\Request;
use function Laravel\Prompts\alert;

class CategoriaController extends Controller
{
    public function index()
    {
        $categorias = Categoria::where('loja_id', auth()->user()->loja_id)->paginate(10);
        return view('categorias.index', [
            'categorias' => $categorias
        ]);
    }

    public function create()
    {
        return view('categorias.create');
    }

    public function store(CategoriasRequest $request)
    {
        Categoria::create($request->validated());

        return redirect()->route('categorias.index')->with('success', 'A categoria foi criada com sucesso.');
    }

    public function show($id)
    {
    }

    public function edit($id)
    {
        $categoria = Categoria::findOrFail($id);

        return view('categorias.edit', compact('categoria'));
    }

    public function update(CategoriasRequest $request, $id)
    {
        $categoria = Categoria::findOrFail($id);
        $categoria->update($request->all());

        return redirect()->route('categorias.index');
    }

    public function destroy(Categoria $categoria)
    {
        try {
            $categoria->delete();
            return redirect()->route('categorias.index')->with('success', 'A categoria foi excluída com sucesso.');
        } catch (\Exception $e) {
            return redirect()->route('categorias.index')->with('error', 'Não foi possível excluir a categoria.');
        }
    }
}
