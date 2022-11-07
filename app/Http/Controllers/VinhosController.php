<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vinhos;
use App\Models\Vinhosimg;
use App\Models\category_wine;
use App\Models\User;
use App\Models\VinhosClass;
use App\Http\Requests\StoreVinhosRequest;
use App\Http\Requests\UpdateVinhosRequest;

class VinhosController extends Controller
{
    public function indexFrontend(Request $request)
    {
        $vinhos = Vinhos::paginate(16);
        $vinhostotal = $vinhos->count();
        $vinhos_img = Vinhosimg::all();
        $categorias = category_wine::all();
        $classificacoes = VinhosClass::select('classificacao')->orderBy('classificacao', 'ASC')->distinct()->get();
        $vinhosclass = VinhosClass::all();
        $produtores_vinho = Vinhos::select('id_produtor')->distinct()->get();
        $regioes = Vinhos::select('regiao')->distinct()->get();
        $vinhos_nome = Vinhos::select('nome')->get();
        $vinhos_categorias = category_wine::select('nome')->get();
        $vinhos_produtores = Vinhos::select('id_produtor')->distinct()->get();
        $qnts_cl = Vinhos::select('qnt_cl')->distinct()->get();

        if ($request->ajax()) {

            return view('includes.frontend.listavinhos', compact([
                'vinhos',
                'vinhos_img',
                'categorias',
                'vinhosclass',
                'classificacoes',
                'produtores_vinho',
                'vinhostotal',
                'vinhos_nome',
                'vinhos_categorias',
                'vinhos_produtores',
                'regioes',
                'qnts_cl'
            ]))->render();
        }

        return view('paginas.frontend.vinhos', compact([
            'vinhos',
            'vinhos_img',
            'categorias',
            'vinhosclass',
            'classificacoes',
            'produtores_vinho',
            'vinhostotal',
            'vinhos_nome',
            'vinhos_categorias',
            'vinhos_produtores',
            'regioes',
            'qnts_cl'
        ]))->render();
    }

    public function ordemalfabetica(Request $request)
    {
        $vinhos = Vinhos::orderBy('nome', 'ASC')->paginate(16);
        $vinhostotal = $vinhos->count();
        $vinhos_img = Vinhosimg::all();
        $categorias = category_wine::all();
        $classificacoes = VinhosClass::select('classificacao')->orderBy('classificacao', 'ASC')->distinct()->get();
        $vinhosclass = VinhosClass::all();
        $produtores_vinho = Vinhos::select('id_produtor')->distinct()->get();
        $vinhos_nome = Vinhos::select('nome')->get();
        $vinhos_categorias = category_wine::select('nome')->get();
        $vinhos_produtores = Vinhos::select('id_produtor')->distinct()->get();
        $regioes = Vinhos::select('regiao')->distinct()->get();
        $qnts_cl = Vinhos::select('qnt_cl')->distinct()->get();

        if ($request->ajax()) {

            return view('includes.frontend.listavinhos', compact([
                'vinhos',
                'vinhos_img',
                'categorias',
                'vinhosclass',
                'classificacoes',
                'produtores_vinho',
                'vinhostotal',
                'vinhos_nome',
                'vinhos_categorias',
                'vinhos_produtores',
                'regioes',
                'qnts_cl'
            ]))->render();
        }
        return view('paginas.frontend.vinhos', compact([
            'vinhos',
            'vinhos_img',
            'categorias',
            'vinhosclass',
            'classificacoes',
            'produtores_vinho',
            'vinhostotal',
            'vinhos_nome',
            'vinhos_categorias',
            'vinhos_produtores',
            'regioes',
            'qnts_cl'
        ]))->render();
    }
    public function ordemclassificacao(Request $request)
    {
        $vinhos = Vinhos::orderBy('created_at', 'DESC')->paginate(16);
        $vinhostotal = $vinhos->count();
        $vinhos_img = Vinhosimg::all();
        $categorias = category_wine::all();
        $classificacoes = VinhosClass::select('classificacao')->orderBy('classificacao', 'ASC')->distinct()->get();
        $vinhosclass = VinhosClass::all();
        $produtores_vinho = Vinhos::select('id_produtor')->distinct()->get();
        $vinhos_nome = Vinhos::select('nome')->get();
        $vinhos_categorias = category_wine::select('nome')->get();
        $vinhos_produtores = Vinhos::select('id_produtor')->distinct()->get();
        $regioes = Vinhos::select('regiao')->distinct()->get();
        $qnts_cl = Vinhos::select('qnt_cl')->distinct()->get();

        if ($request->ajax()) {

            return view('includes.frontend.listavinhos', compact([
                'vinhos',
                'vinhos_img',
                'categorias',
                'vinhosclass',
                'classificacoes',
                'produtores_vinho',
                'vinhostotal',
                'vinhos_nome',
                'vinhos_categorias',
                'vinhos_produtores',
                'regioes',
                'qnts_cl'
            ]))->render();
        }
        return view('paginas.frontend.vinhos', compact([
            'vinhos',
            'vinhos_img',
            'categorias',
            'vinhosclass',
            'classificacoes',
            'produtores_vinho',
            'vinhostotal',
            'vinhos_nome',
            'vinhos_categorias',
            'vinhos_produtores',
            'regioes',
            'qnts_cl'
        ]))->render();
    }
    public function ordemdata(Request $request)
    {
        $vinhos = Vinhos::all()->orderBy('created_at', 'DESC')->paginate(16);
        $vinhostotal = $vinhos->count();
        $vinhos_img = Vinhosimg::all();
        $categorias = category_wine::all();
        $classificacoes = VinhosClass::select('classificacao')->orderBy('classificacao', 'ASC')->distinct()->get();
        $vinhosclass = VinhosClass::all();
        $produtores_vinho = Vinhos::select('id_produtor')->distinct()->get();
        $vinhos_nome = Vinhos::select('nome')->get();
        $vinhos_categorias = category_wine::select('nome')->get();
        $vinhos_produtores = Vinhos::select('id_produtor')->distinct()->get();
        $regioes = Vinhos::select('regiao')->distinct()->get();
        $qnts_cl = Vinhos::select('qnt_cl')->distinct()->get();

        if ($request->ajax()) {

            return view('includes.frontend.listavinhos', compact([
                'vinhos',
                'vinhos_img',
                'categorias',
                'vinhosclass',
                'classificacoes',
                'produtores_vinho',
                'vinhostotal',
                'vinhos_nome',
                'vinhos_categorias',
                'vinhos_produtores',
                'regioes',
                'qnts_cl'
            ]))->render();
        }
        return view('paginas.frontend.vinhos', compact([
            'vinhos',
            'vinhos_img',
            'categorias',
            'vinhosclass',
            'classificacoes',
            'produtores_vinho',
            'vinhostotal',
            'vinhos_nome',
            'vinhos_categorias',
            'vinhos_produtores',
            'regioes',
            'qnts_cl'
        ]))->render();
    }
    public function vinho($vinho)
    {
        $vinho_det = Vinhos::find($vinho);
        $vinho_cat = category_wine::find($vinho_det->id_categoria);
        $vinho_produtor = User::find($vinho_det->id_produtor);
        $vinhos_image = Vinhosimg::all();
        $vinhos_foto = $vinhos_image->where('id_vinho', $vinho);

        return view('paginas.frontend.vinho_produto', compact([
            'vinho_det',
            'vinho_cat',
            'vinho_produtor',
            'vinhos_foto'
        ]));
    }

    public function vinhos()
    {
        $vinhos = Vinhos::all();
        $vinhosimg = Vinhosimg::all();
        $categorias = category_wine::all();
        $users = User::all();

        $vinho_select = $vinhos->where('id', 1);
        $vinho_select->all();

        return view('paginas.frontend.vinho_produto', compact([
            'vinhos',
            'vinhosimg',
            'categorias',
            'users',
            'vinho_select',
        ]));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vinhos = Vinhos::all();
        $vinho_img = Vinhosimg::all();
        $categorias = category_wine::all();
        $users = User::all();
        return view('paginas.backend.vinhos.index', compact([
            'vinhos',
            'vinho_img',
            'categorias',
            'users'
        ]));
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
    public function store(StoreVinhosRequest $request)
    {
        $fields = $request->validated();
        $vinho = new Vinhos();
        $vinho_foto = new Vinhosimg();
        $vinho->fill($fields);

        $vinho->id_categoria = $request->id_categoria;
                
        if ($request->hasFile('img')) {
            $photo_path = $request->file('img')->store('public/vinhos');
            $vinho->img = $request->file('img')->hashName();
            $vinho_foto->img = $request->file('img')->hashName();
        }

        $vinho->save();
        $vinho_foto->id_vinho = $vinho->id;

        $vinho_foto->save();

        return redirect()->route('vinhos.index')->with('success', 'Vinho adicionado com sucesso', compact('vinho'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($vinhos)
    {
        $vinho = Vinhos::find($vinhos);
        $categorias = category_wine::all();
        $users = User::all();
        $vinho_produtor = User::find($vinho->id_produtor);
        return view('paginas.backend.vinhos.show', compact([
            'vinho',
            'categorias',
            'users',
            'vinho_produtor'
        ]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($vinhos)
    {
        $vinho = Vinhos::find($vinhos);
        $vinho_img = Vinhosimg::all();
        $categorias = category_wine::all();
        $users = User::all();
        $vinho_produtor = User::find($vinho->id_produtor);

        return view('paginas.backend.vinhos.edit', compact([
            'vinho',
            'vinho_img',
            'categorias',
            'users',
            'vinho_produtor'
        ]));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateVinhosRequest $request, Vinhos $vinho)
    {
        $fields = $request->validated();
        $vinho->update($fields);
        
        if ($request->hasFile('img')) {
            $photo_path = $request->file('img')->store('public/vinhos');
            $vinho->img = $request->file('img')->hashName();
        }

        $vinho->save();
        return redirect()->route('vinhos.index')->with('success', 'Vinho editado com sucesso', compact('vinho'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Vinhos $vinho)
    {
        $vinho->delete($vinho);
        return redirect()->route('vinhos.index')->with('success', 'Vinho removido com sucesso', compact('vinho'));
    }
}
