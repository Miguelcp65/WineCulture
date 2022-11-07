<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Receitas;
use App\Http\Requests\UpdateUsersRequest;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function indexFrontend() {
        if (!Auth::check()) {
            return redirect()->route('login');
        } else {
        $user = User::find(Auth::user()->id);
        $blogs = Blog::where('id_user', '=', Auth::user()->id)->count();
        $receitas = receitas::where('id_user', '=', Auth::user()->id)->count();

        return view('paginas.frontend.perfil', compact([
            'user',
            'blogs',
            'receitas'
        ]));
        }
    }

    public function index()
    {
        $dd = Carbon::now()->format('Y m');
        $users = User::all();
        $user_utl_12_total = User::where('created_at', '>',  Carbon::now()->subMonth(11)->format('Y-m'))->where('created_at', '<',  Carbon::now()->subMonth(10)->format('Y-m'))->count();
        $user_utl_11_total = User::where('created_at', '>',  Carbon::now()->subMonth(10)->format('Y-m'))->where('created_at', '<',  Carbon::now()->subMonth(9)->format('Y-m'))->count();
        $user_utl_10_total = User::where('created_at', '>',  Carbon::now()->subMonth(9)->format('Y-m'))->where('created_at', '<',  Carbon::now()->subMonth(8)->format('Y-m'))->count();
        $user_utl_9_total = User::where('created_at', '>',  Carbon::now()->subMonth(8)->format('Y-m'))->where('created_at', '<',  Carbon::now()->subMonth(7)->format('Y-m'))->count();
        $user_utl_8_total = User::where('created_at', '>',  Carbon::now()->subMonth(7)->format('Y-m'))->where('created_at', '<',  Carbon::now()->subMonth(6)->format('Y-m'))->count();
        $user_utl_7_total = User::where('created_at', '>',  Carbon::now()->subMonth(6)->format('Y-m'))->where('created_at', '<',  Carbon::now()->subMonth(5)->format('Y-m'))->count();
        $user_utl_6_total = User::where('created_at', '>',  Carbon::now()->subMonth(5)->format('Y-m'))->where('created_at', '<',  Carbon::now()->subMonth(4)->format('Y-m'))->count();
        $user_utl_5_total = User::where('created_at', '>',  Carbon::now()->subMonth(4)->format('Y-m'))->where('created_at', '<',  Carbon::now()->subMonth(3)->format('Y-m'))->count();
        $user_utl_4_total = User::where('created_at', '>',  Carbon::now()->subMonth(3)->format('Y-m'))->where('created_at', '<',  Carbon::now()->subMonth(2)->format('Y-m'))->count();
        $user_utl_3_total = User::where('created_at', '>',  Carbon::now()->subMonth(2)->format('Y-m'))->where('created_at', '<',  Carbon::now()->subMonth(1)->format('Y-m'))->count();
        $user_utl_2_total = User::where('created_at', '>',  Carbon::now()->subMonth(1)->format('Y-m'))->where('created_at', '<',  Carbon::now()->format('Y-m'))->count();
        $user_utl_1_total = User::where('created_at', '>',  Carbon::now()->subMonth(0)->format('Y-m'))->count();

        $users_masculino_total= User::where('genero', '=', "Masculino")->count();
        $users_feminino_total= User::where('genero', '=', "Feminino")->count();
        $users_nao_revelar_total= User::where('genero', '=', "Nao Revelar")->count();
        $users_genero_null_total= User::where('genero', '=', "Nao Definido")->count();

        $total_users_utls_12meses = $user_utl_1_total + $user_utl_2_total + $user_utl_3_total + $user_utl_4_total + $user_utl_5_total + $user_utl_6_total + $user_utl_7_total + $user_utl_8_total + $user_utl_9_total + $user_utl_10_total + $user_utl_11_total + $user_utl_12_total;
        $totalProdutores = User::whereYear('created_at', '=', 2020)->where('tipouser', '=', 'Produtor')->count();

        return view('paginas.backend.users.index', compact([
            'users',
            'user_utl_12_total',
            'user_utl_11_total',
            'user_utl_10_total',
            'user_utl_9_total',
            'user_utl_8_total',
            'user_utl_7_total',
            'user_utl_6_total',
            'user_utl_5_total',
            'user_utl_4_total',
            'user_utl_3_total',
            'user_utl_2_total',
            'user_utl_1_total',
            'total_users_utls_12meses',
            'users_masculino_total',
            'users_feminino_total',
            'users_nao_revelar_total',
            'users_genero_null_total'
        ]));
    }
    public function frontend_store(Request $request)
    {

    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUsersRequest $request, User $user)
    {
        $fields = $request->validated();
        $user->update($fields);
   
        $user->genero = $request->genero;
        $user->pais = $request->pais;
        $user->data_nasc = $request->data_nasc;

        if ($request->hasFile('img')) {
            $photo_path = $request->file('img')->store('public\users');
            $user->img = $request->file('img')->hashName();
        }
        @dd($fields);
        $user->save();
        return redirect()->route('perfil')->with('success', 'Perfil editado com sucesso', compact('user'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, User $user)
    {
        $user->delete($user);
        return redirect()->route('users.index')->with('success', 'Utilizador removido com sucesso', compact('user'));
    }
}
