<?php

namespace App\Http\Controllers;

use App\Models\Mensagens;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\WPPosts;
use App\Models\receitas;
use App\Models\WPPostmeta;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Blog;
use App\Models\Category;
use App\Models\category_wine;


class AdminController extends Controller
{
    public function admin()
    {
        return view('paginas.backend.admin');
    }
    public function chat()
    {
        $id_user_auth = Auth::id();
        $mensagens = Mensagens::select('id_envio')->distinct('id_envio')->where('id_destino', Auth::id())->get();
        $mensagens_chat = Mensagens::where('id_destino', Auth::id())->orWhere('id_envio', Auth::id())->orderBy('created_at', 'ASC')->get();
        return view('paginas.backend.chat', compact(['mensagens', 'mensagens_chat', 'id_user_auth']));
    }

    public function dashboard()
    {
        //verificar se o utilizador fez login e se é um administrador

        if (!Auth::check()) {
            return redirect()->route('login');
        } else {
            $id_user_auth =  Auth::user()->tipouser;
            if ($id_user_auth !== "Administrador") {
                return redirect()->route('login');
            } else {

                //verificar se o utilizador fez login e se é um administrador


                //Ir buscar os utilizadores organizados por mes
                $totalUsersJan = User::whereYear('created_at', '=', 2020)->whereMonth('created_at', '=', 1)->count();
                $totalUsersFev = User::whereYear('created_at', '=', 2020)->whereMonth('created_at', '=', 2)->count();
                $totalUsersMar = User::whereYear('created_at', '=', 2020)->whereMonth('created_at', '=', 3)->count();
                $totalUsersAbr = User::whereYear('created_at', '=', 2020)->whereMonth('created_at', '=', 4)->count();
                $totalUsersMai = User::whereYear('created_at', '=', 2020)->whereMonth('created_at', '=', 5)->count();
                $totalUsersJun = User::whereYear('created_at', '=', 2020)->whereMonth('created_at', '=', 6)->count();
                $totalUsersJul = User::whereYear('created_at', '=', 2020)->whereMonth('created_at', '=', 7)->count();
                $totalUsersAgo = User::whereYear('created_at', '=', 2020)->whereMonth('created_at', '=', 8)->count();
                $totalUsersSet = User::whereYear('created_at', '=', 2020)->whereMonth('created_at', '=', 9)->count();
                $totalUsersOut = User::whereYear('created_at', '=', 2020)->whereMonth('created_at', '=', 10)->count();
                $totalUsersNov = User::whereYear('created_at', '=', 2020)->whereMonth('created_at', '=', 11)->count();
                $totalUsersDez = User::whereYear('created_at', '=', 2020)->whereMonth('created_at', '=', 12)->count();
                $totalUsers = User::whereYear('created_at', '=', 2020)->count();
                //Ir buscar os utilizadores organizados por mes


                //Ir buscar os produtores organizados por mes
                $produtoresJan = User::whereYear('created_at', '=', 2020)->whereMonth('created_at', '=', 1)->where('tipouser', '=', 'Produtor')->get();
                $produtoresFev = User::whereYear('created_at', '=', 2020)->whereMonth('created_at', '=', 2)->where('tipouser', '=', 'Produtor')->get();
                $produtoresMar = User::whereYear('created_at', '=', 2020)->whereMonth('created_at', '=', 3)->where('tipouser', '=', 'Produtor')->get();
                $produtoresAbr = User::whereYear('created_at', '=', 2020)->whereMonth('created_at', '=', 4)->where('tipouser', '=', 'Produtor')->get();
                $produtoresMai = User::whereYear('created_at', '=', 2020)->whereMonth('created_at', '=', 5)->where('tipouser', '=', 'Produtor')->get();
                $produtoresJun = User::whereYear('created_at', '=', 2020)->whereMonth('created_at', '=', 6)->where('tipouser', '=', 'Produtor')->get();
                $produtoresJul = User::whereYear('created_at', '=', 2020)->whereMonth('created_at', '=', 7)->where('tipouser', '=', 'Produtor')->get();
                $produtoresAgo = User::whereYear('created_at', '=', 2020)->whereMonth('created_at', '=', 8)->where('tipouser', '=', 'Produtor')->get();
                $produtoresSet = User::whereYear('created_at', '=', 2020)->whereMonth('created_at', '=', 9)->where('tipouser', '=', 'Produtor')->get();
                $produtoresOut = User::whereYear('created_at', '=', 2020)->whereMonth('created_at', '=', 10)->where('tipouser', '=', 'Produtor')->get();
                $produtoresNov = User::whereYear('created_at', '=', 2020)->whereMonth('created_at', '=', 11)->where('tipouser', '=', 'Produtor')->get();
                $produtoresDez = User::whereYear('created_at', '=', 2020)->whereMonth('created_at', '=', 12)->where('tipouser', '=', 'Produtor')->get();
                $totalProdutoresJan = $produtoresJan->count();
                $totalProdutoresFev = $produtoresFev->count();
                $totalProdutoresMar = $produtoresMar->count();
                $totalProdutoresAbr = $produtoresAbr->count();
                $totalProdutoresMai = $produtoresMai->count();
                $totalProdutoresJun = $produtoresJun->count();
                $totalProdutoresJul = $produtoresJul->count();
                $totalProdutoresAgo = $produtoresAgo->count();
                $totalProdutoresSet = $produtoresSet->count();
                $totalProdutoresOut = $produtoresOut->count();
                $totalProdutoresNov = $produtoresNov->count();
                $totalProdutoresDez = $produtoresDez->count();
                $totalProdutores = User::whereYear('created_at', '=', 2020)->where('tipouser', '=', 'Produtor')->count();
                //Ir buscar os produtores organizados por mes


                //Ir buscar os produtos da loja(worpress) organizados por mes
                $totalProdsJan = WPPosts::where('post_status', 'publish')->where('post_type', 'product')->whereYear('post_date', '=', 2020)->whereMonth('post_date', '=', 1)->count();
                $totalProdsFev = WPPosts::where('post_status', 'publish')->where('post_type', 'product')->whereYear('post_date', '=', 2020)->whereMonth('post_date', '=', 2)->count();
                $totalProdsMar = WPPosts::where('post_status', 'publish')->where('post_type', 'product')->whereYear('post_date', '=', 2020)->whereMonth('post_date', '=', 3)->count();
                $totalProdsAbr = WPPosts::where('post_status', 'publish')->where('post_type', 'product')->whereYear('post_date', '=', 2020)->whereMonth('post_date', '=', 4)->count();
                $totalProdsMai = WPPosts::where('post_status', 'publish')->where('post_type', 'product')->whereYear('post_date', '=', 2020)->whereMonth('post_date', '=', 5)->count();
                $totalProdsJun = WPPosts::where('post_status', 'publish')->where('post_type', 'product')->whereYear('post_date', '=', 2020)->whereMonth('post_date', '=', 6)->count();
                $totalProdsJul = WPPosts::where('post_status', 'publish')->where('post_type', 'product')->whereYear('post_date', '=', 2020)->whereMonth('post_date', '=', 7)->count();
                $totalProdsAgo = WPPosts::where('post_status', 'publish')->where('post_type', 'product')->whereYear('post_date', '=', 2020)->whereMonth('post_date', '=', 8)->count();
                $totalProdsSet = WPPosts::where('post_status', 'publish')->where('post_type', 'product')->whereYear('post_date', '=', 2020)->whereMonth('post_date', '=', 9)->count();
                $totalProdsOut = WPPosts::where('post_status', 'publish')->where('post_type', 'product')->whereYear('post_date', '=', 2020)->whereMonth('post_date', '=', 10)->count();
                $totalProdsNov = WPPosts::where('post_status', 'publish')->where('post_type', 'product')->whereYear('post_date', '=', 2020)->whereMonth('post_date', '=', 11)->count();
                $totalProdsDez = WPPosts::where('post_status', 'publish')->where('post_type', 'product')->whereYear('post_date', '=', 2020)->whereMonth('post_date', '=', 12)->count();
                $totalProds = WPPosts::where('post_status', 'publish')->where('post_type', 'product')->whereYear('post_date', '=', 2020)->count();
                //Ir buscar os produtos da loja(worpress) organizados por mes


                $users = User::all();
                $wp_prods = WPPostmeta::all()->where('meta_key', '_regular_price');
                $wp_prodsStock = WPPostmeta::all()->where('meta_key', '_stock_status');
                $produtores = User::where('tipouser', '=', 'Produtor')->get();
                $prosdwp = WPPosts::where('post_status', '=', 'publish')->where('post_type', 'product')->get();

                $id_user_auth = Auth::id();
                $ultimos_users = DB::table('users')->latest('created_at')->take(4)->orderBy('created_at', 'ASC')->get();
                $total_posts = Blog::all();
                $total_posts_count = $total_posts->count();
                $ultimas_categorias = DB::table('categories')->latest('created_at')->take(4)->orderBy('created_at', 'ASC')->get();
                $ultimas_categorias_vinhos = DB::table('category_wines')->latest('created_at')->take(4)->orderBy('created_at', 'ASC')->get();
                $total_receitas = Receitas::all();
                $total_receitas_count = $total_receitas->count();
                $total_produtoswp = WPPosts::where('post_status', '=', 'publish')->latest('post_date')->take(4)->orderBy('post_date', 'ASC')->get();
                $total_produtoswp_count = $total_produtoswp->count();
                $prodsimg = WPPosts::where('post_type', 'attachment')->get();
                
              
                return view('paginas.backend.dashboard', compact([
                    'totalUsersJan',
                    'totalUsersFev',
                    'totalUsersMar',
                    'totalUsersAbr',
                    'totalUsersMai',
                    'totalUsersJun',
                    'totalUsersJul',
                    'totalUsersAgo',
                    'totalUsersSet',
                    'totalUsersOut',
                    'totalUsersNov',
                    'totalUsersDez',
                    'totalUsers',
                    'totalProdutoresJan',
                    'totalProdutoresFev',
                    'totalProdutoresMar',
                    'totalProdutoresAbr',
                    'totalProdutoresMai',
                    'totalProdutoresJun',
                    'totalProdutoresJul',
                    'totalProdutoresAgo',
                    'totalProdutoresSet',
                    'totalProdutoresOut',
                    'totalProdutoresNov',
                    'totalProdutoresDez',
                    'totalProdutores',
                    'totalProdsJan',
                    'totalProdsFev',
                    'totalProdsMar',
                    'totalProdsAbr',
                    'totalProdsMai',
                    'totalProdsJun',
                    'totalProdsJul',
                    'totalProdsAgo',
                    'totalProdsSet',
                    'totalProdsOut',
                    'totalProdsNov',
                    'totalProdsDez',
                    'totalProds',
                    'users',
                    'produtores',
                    'prosdwp',
                    'wp_prods',
                    'wp_prodsStock',
                    'id_user_auth',
                    'ultimos_users',
                    'total_posts_count',
                    'total_posts',
                    'ultimas_categorias',
                    'ultimas_categorias_vinhos',
                    'total_receitas',
                    'total_receitas_count',
                    'total_produtoswp',
                    'total_produtoswp_count',
                    'prodsimg'
                ]));
              
            }
        }
    }
}
