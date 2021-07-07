<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medico;

class MedicoController extends Controller
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
        return view('medico.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(empty($request->nome) or empty($request->cpf) or empty($request->telefone) or empty($request->nascimento) or empty($request->crm) or empty($request->especialidade) or empty($request->senha)){

            return back()->withInput()->with('mensagem', 'Preencha todos os campos para realizar o cadastro!');

        }else{

            $m = new Medico();
            $m->nome = $request->nome;
            $m->cpf = $request->cpf;
            $m->telefone = $request->telefone;
            $m->nascimento = $request->nascimento;
            $m->crm = $request->crm;
            $m->especialidade = $request->especialidade;
            $m->senha = $request->senha;
            $m->save();

        
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
