<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCategoriaBlogRequest;
use App\Http\Requests\UpdateCategoriaBlogRequest;

class CategoriablogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('paginas.backend.categoriasblog.index', compact('categories'));
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
    public function store(StoreCategoriaBlogRequest $request)
    {

        $fields = $request->validated();
        $categories = new Category();
        $categories->fill($fields);

        if ($request->hasFile('img')) {
            $photo_path = $request->file('img')->store('public/categorias');
            $categories->img = basename($photo_path);
        }

        $categories->save();
        return redirect()->route('categoriasblog.index')->with('success', 'Categoria adicionada com sucesso', compact('categories'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Category $categories)
    {
        return view('paginas.backend.categoriasblog.show', compact('categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $categories)
    {
        return view('paginas.backend.categoriasblog.edit', compact('categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoriaBlogRequest $request, Category $categories)
    {
        $fields = $request->validated();
        $categories->update($fields);

        if ($request->hasFile('img')) {
            $photo_path = $request->file('img')->store('public/categorias');
            $categories->img = basename($photo_path);
        }
        
        $categories->save();
        return redirect()->route('categoriasblog.index')
            ->with('success', 'Categoria editada com sucesso', compact('categories'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Category $categories)
    {
        $categories->delete($categories);
        return redirect()->route('categoriasblog.index')->with('success', 'Categoria removida com sucesso', compact('categories'));
    }
}
