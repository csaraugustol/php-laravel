<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consulta;

class ConsultaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('consulta.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("consulta.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(empty($request->data) or empty($request->hora) or empty($request->idpaciente) or empty($request->idmedico) or empty($request->motivo) or empty($request->historico)){

            return back()->withInput()->with('mensagem', 'Preencha todos os campos para realizar o cadastro!');

        }else{

            $c = new Consulta();
            $c->data = $request->data;
            $c->hora = $request->hora;
            $c->paciente_id = $request->idpaciente;
            $c->medico_id = $request->idmedico;
            $c->motivo = $request->motivo;
            $c->historico = $request->historico;
    
            $c->save();


        
        return redirect("/consulta")->with('mensagem', 'Cadastrado realizado com sucesso!')->withInput();
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
