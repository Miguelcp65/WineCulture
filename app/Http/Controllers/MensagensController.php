<?php

namespace App\Http\Controllers;

use App\Models\Contactos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Auth\Events\Validated;
use App\Http\Requests\StoreContactoRequest;
use App\Http\Requests\UpdateContactoRequest;

class MensagensController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function indexFrontend()
    {
        $mensagens = Contactos::all();
        return view('paginas.frontend.contactos', compact('mensagens'));
    }

    public function index()
    {
        $mensagens = Contactos::all();
        $totalmensagens = Contactos::all('id')->count();
        $porresponder = Contactos::all()->where('estado', '=', 'Por Responder')->count();
        return view('paginas.backend.contactos.index', compact('mensagens', 'totalmensagens', 'porresponder'));
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

    public function frontend_store(StoreContactoRequest $request)
    {
        $fields = $request->validated();
        $mensagem = new Contactos();
        $mensagem->fill($fields);
        $mensagem->save();
        return redirect()->route('contactos')->with('success', 'Dúvida enviada com sucesso', compact('mensagem'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Contactos $mensagem)
    {
        return view('paginas.backend.contactos.show', compact('mensagem'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Contactos $mensagem)
    {
        return view('paginas.backend.contactos.edit', compact('mensagem'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateContactoRequest $request, Contactos $mensagem)
    {
        $fields = $request->validated();
        $mensagem->estado='Respondida';
        $mensagem->fill($fields);
        Mail::send('paginas.frontend.contactosresposta', array(
            'resposta' => $request->input('resposta'),
            'email' => $mensagem->email,
            'nome' => $mensagem->name,
            'assunto' => $mensagem->assunto,
            'pergunta' => $mensagem->mensagem,
        ), function ($message) use ($mensagem) {
            $message->to($mensagem->email)
                ->subject('[WineCulture] ' . $mensagem->assunto);
        });
        $mensagem->save();
        return redirect()->route('contactos.index')->with('success', 'Pergunta foi enviada com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Contactos $mensagem)
    {
        $mensagem->delete($mensagem);
        return redirect()->route('contactos.index')->with('success', 'Mensagem removida com sucesso', compact('mensagem'));
    }
}
