<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\CategoriaPergunta;
use App\Models\Perguntas;
use App\Models\Vinhos;
use Illuminate\Http\Request;
use App\Models\receitas;
use App\Models\Mensagens;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function index()
    {
        return view('paginas.frontend.index');
    }

    public function sobre()
    {
        return view('paginas.frontend.sobre');
    }

    public function sobre_vinhos()
    {
        return view('paginas.frontend.sobre_vinhos');
    }
    public function pdp()
    {
        return view('paginas.frontend.pdp');
    }
    public function perfil_publico($perfil)
    {
        $user_perfil = User::find($perfil);
        $userreceitascount = receitas::where("id_user", $perfil)->count();
        $userblogcount = Blog::where("id_user", $perfil)->count();
        $array = [];
        $users = receitas::where("id_user", $perfil)->get();

        foreach ($users as $key => $user) {
            $object = (object) [
                'created_at' => $user->created_at,
                'id' => $user->id,
                'desc' => $user->descricao,
                'titulo' => $user->nome,
                'img' => "storage/receitas/".$user->foto,
                'tabela' => 'receitas'
            ];
            $array[] = $object;
         
        }
        $users = Vinhos::where("id_produtor",  $perfil)->get();

        foreach ($users as $key => $user) {
            $object = (object) [
                'created_at' => $user->created_at,
                'desc' => $user->descricao,
                'id' => $user->id,
                'titulo' => $user->nome,
                'img' => "storage/vinhos/".$user->img,
                'tabela' => 'vinhos'
            ];
            $array[] = $object;
        }
        $users = Blog::where("id_user",  $perfil)->get();

        foreach ($users as $key => $user) {
            $object = (object) [
                'created_at' => $user->created_at,
                'titulo' => $user->titulo,
                'id' => $user->id,
                'desc' => $user->preview,
                'img' => "storage/blog/".$user->img,
                'tabela' => 'blogs'
            ];
            $array[] = $object;
        }
        usort(

            $array,

            function ($a, $b) {

                if ($a->created_at == $b->created_at) return 0;

                return (($a->created_at < $b->created_at) ? -1 : 1);
            }
        );
        
        return view('paginas.frontend.perfil_publico', compact(['array', 'user_perfil','userreceitascount','userblogcount']));
    }

    public function termos_condicoes(){
        return view('paginas.frontend.termos_condicoes');
    }
}
