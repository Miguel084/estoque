<?php

namespace App\Http\Controllers;

use App\Http\Requests\LojaRequest;
use App\Models\Loja;

class LojaController extends Controller
{
    public function index()
    {
        return Loja::all();
    }

    public function store(LojaRequest $request)
    {
        return Loja::create($request->validated());
    }

    public function show(Loja $loja)
    {
        return $loja;
    }

    public function update(LojaRequest $request, Loja $loja)
    {
        $loja->update($request->validated());

        return $loja;
    }

    public function destroy(Loja $loja)
    {
        $loja->delete();

        return response()->json();
    }
}
