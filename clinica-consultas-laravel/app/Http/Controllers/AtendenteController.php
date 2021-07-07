<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Atendente;

class AtendenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('atendente.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(empty($request->nome) or empty($request->cpf) or empty($request->telefone) or empty($request->nascimento) or empty($request->senha)){

            return back()->withInput()->with('mensagem', 'Preencha todos os campos para realizar o cadastro!');

        }else{

        $a = new Atendente();
        $a->nome = $request->nome;
        $a->cpf = $request->cpf;
        $a->telefone = $request->telefone;
        $a->nascimento = $request->nascimento;
        $a->senha = $request->senha;
        $a->save();

        
        return redirect("/")->with('mensagem', 'Cadastrado realizado com sucesso!');
        }
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
