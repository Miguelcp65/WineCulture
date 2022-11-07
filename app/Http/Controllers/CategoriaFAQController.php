<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoriaFAQRequest;
use App\Http\Requests\UpdateCategoriaFAQRequest;
use Illuminate\Http\Request;
use App\Models\CategoriaPergunta;

class CategoriaFAQController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias = CategoriaPergunta::all();
        return view('paginas.backend.categoriasFAQ.index', compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoriaFAQRequest $request)
    {
        $fields = $request->validated();
        $categorias = new CategoriaPergunta();
        $categorias->fill($fields);
        $categorias->save();
        return redirect()->route('categoriasFAQ.index')->with('success', 'Categoria adicionada com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(CategoriaPergunta $categoria)
    {
        return view('paginas.backend.categoriasFAQ.show', compact('categoria'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(CategoriaPergunta $categoria)
    {
        return view('paginas.backend.categoriasFAQ.edit', compact('categoria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoriaFAQRequest $request, CategoriaPergunta $categoria)
    {
        $fields = $request->validated();
        $categoria->update($fields);
        $categoria->save();
        return redirect()->route('categoriasFAQ.index')->with('success', 'Pergunta foi editada com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, CategoriaPergunta $categoria)
    {
        $categoria->delete($categoria);
        return redirect()->route('categoriasFAQ.index')->with('success', 'Categoria removida com sucesso');
    }
}
