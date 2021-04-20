<?php

namespace App\Http\Controllers;

use App\Models\Registro;
use App\Models\Equipamento;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegistroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registros = Registro::orderBy('dataLimite', 'asc')->get();

        return view('administrativo.manutencoes.index', ['registros' => $registros]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $registros = Registro::get();
        $equipamentos = Equipamento::orderBy('nome')->get();
        $users = User::orderBy('id')->get();

        return  view('administrativo.manutencoes.create', ['equipamentos' => $equipamentos, 'users' => $users]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Registro::create($request->all());
        session()->flash('mensagem', 'Registro cadastrado com sucesso!');
        return redirect()->route('registros.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Registro  $registro
     * @return \Illuminate\Http\Response
     */
    public function show(Registro $registro)
    {
        Registo::create($request->all());
        session()->flash('mensagem', 'Registro efetuado com sucesso!');
        return redirect()->route('registro.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Registro  $registro
     * @return \Illuminate\Http\Response
     */
    public function edit(Registro $registro)
    {

        $equipamentos = Equipamento::get();
        return view('administrativo.manutencoes.edit', ['registro' => $registro, 'equipamentos' => $equipamentos]);
        // $equipamentos = Equipamento::get();
        // $registro = Registro::get();

        // return view('administrativo.manutencoes.edit', ['registro' => $registro, 'equipamentos' => $equipamentos]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Registro  $registro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Registro $registro)
    {
        $registro->fill($request->all());
        $registro->save();

        session()->flash('mensagem', 'Manutenção atualizada!');
        return redirect()->route('registros.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Registro  $registro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Registro $registro)
    {
        $registro->delete();
        session()->flash('mensagem', 'Manutenção excluída!');
        return redirect()->route('registros.index');
    }
}
