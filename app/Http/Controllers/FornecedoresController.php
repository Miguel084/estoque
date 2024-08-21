<?php

namespace App\Http\Controllers;

use App\Http\Requests\FornecedoresRequest;
use App\Models\Fornecedore;

class FornecedoresController extends Controller
{
    public function index()
    {
        return Fornecedore::all();
    }

    public function store(FornecedoresRequest $request)
    {
        return Fornecedore::create($request->validated());
    }

    public function show(Fornecedore $fornecedores)
    {
        return $fornecedores;
    }

    public function update(FornecedoresRequest $request, Fornecedore $fornecedores)
    {
        $fornecedores->update($request->validated());

        return $fornecedores;
    }

    public function destroy(Fornecedore $fornecedores)
    {
        $fornecedores->delete();

        return response()->json();
    }
}
