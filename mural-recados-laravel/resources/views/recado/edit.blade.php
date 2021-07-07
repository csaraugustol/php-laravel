@extends('layouts.app')

@section('content')

<form action="{{route('recado.update', ['recado' => $recado->id])}}" method="post" 
class="bg-primary container w-50 text-warning" style="height: 600px">
@csrf
@method('PUT')

    <div class="form-gruop">

        <label for="title">Nome</label>
        <input type="text" name="nome" id="nome" class="form-control" value="{{$recado->nome}}">

    </div>

    <div class="form-gruop mt-2">

        <label for="email">E-mail</label>
        <input type="text" name="email" id="email" class="form-control" value="{{$recado->email}}">

    </div>

    <div class="form-gruop mt-2">

        <label for="cidade">Cidade</label>
        <input type="text" name="cidade" id="cidade" class="form-control" value="{{$recado->cidade}}">

    </div>

    <div class="form-gruop mt-2">

        <label for="recado">recado</label>
        <textarea name="recado" id="recado" cols="30" rows="10" class="form-control">{{$recado->recado}}</textarea>


    </div>

    <button class="btn btn-success mt-3" type="submit">Salvar Edição</button><br>
    <a href="{{route('recado.index')}}" class="text-light">Voltar</a>
</form>

@endsection

@section('subtitle')
Editar Recado
@endsection