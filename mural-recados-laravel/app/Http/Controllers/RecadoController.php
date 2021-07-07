<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recado;

class RecadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recados = Recado::all();

        return view('recado.index', ['recados' => $recados]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('recado.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $recado = $request->all();
        $recado['is_active'] = true;

        Recado::create($recado);
        return redirect()->route('recado.index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $recado = Recado::findOrFail($id);
        $recado;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Recado $recado)
    {
    

        return view('recado.edit', ['recado' => $recado]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recado $recado)
    {
        $recado->update($request->all());
        return redirect()->route('recado.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recado $recado)
    {
        $recado->delete();

      return redirect()->route('recado.index');
    }
}
