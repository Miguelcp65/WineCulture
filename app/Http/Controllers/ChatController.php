<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mensagens;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    public function backend_store(Request $request)
    {
        request()->validate([
            'id_destino' => 'required',
            'mensagem' => 'required|max:500'
        ],
        [
            'id_destino.required' => 'Selecione um destinatário',
            'mensagem.required' => 'Verifique se a sua Mensagem e válida!'
        ]);
            
        Mensagens::create([
            'id_envio' =>  Auth::user()->id,
            'id_destino' => $request->id_destino,
            'mensagem' => $request->mensagem
        ]);
        $chat =  Mensagens::all();
        return response()->json(array('msg'=> $chat), 200);
    }
    public function refresh()
    {
        $chat =  Mensagens::all();
        $id_user_auth = Auth::id();
        return response()->json(array('msg'=> $chat, 'id_user_auth'=> $id_user_auth), 200);
    }
}