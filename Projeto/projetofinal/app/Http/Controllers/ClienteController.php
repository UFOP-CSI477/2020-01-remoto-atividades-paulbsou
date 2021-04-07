<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('inicio');
    }

    public function portfolio()
    {
        return view('portfolio');
    }

    public function retratos()
    {
        return view('retratos');
    }

    public function familias()
    {
        return view('familias');
    }

    public function casais()
    {
        return view('casais');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $cliente = new Cliente();
        $cliente->nome=$request->nome;
        $cliente->email=$request->email;
        $cliente->whatsapp=$request->whatsapp;
        $cliente->mensagem=$request->mensagem;
        $cliente->save();

        session()->flash('mensagem', 'Dados enviados com sucesso! Entraremos em contato em breve!');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $cliente)
    {
        $clientes = Cliente::orderBy('id')-> get();
        return view('cliente.show', ['cliente' => $clientes]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(Cliente $cliente)
    {
       //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cliente $cliente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cliente $cliente)
    {
        $cliente->delete();
       session()->flash('mensagem', 'Contato excluído!');
       return redirect()->route('cliente.fmcliente');
    }
}
