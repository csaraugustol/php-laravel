@extends('layouts.app')

@section('content')

<div class="row">

    <div class="col-sm-12">
        <a href="{{route('recado.create')}}" class="btn btn-success float-right">Novo Recado</a>
        <h2>MURAL RECADOS</h2>
        <div class="clearfix"></div>
    </div>




    <table class="table table-striped bg-primary container text-center text-warning">
        <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Cidade</th>
                <th>Recado</th>
                <th>Criado em</th>
                <th>Última Edição</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
        @forelse($recados as $r)
        <tr>
        <td>{{$r->id}}</td>
        <td>{{$r->nome}}</td>
        <td>{{$r->email}}</td>
        <td>{{$r->cidade}}</td>
        <td>{{$r->recado}}</td>
        <td>{{date('d/m/y H:i:s', strtotime($r->created_at))}}</td>
        <td>{{date('d/m/y H:i:s', strtotime($r->updated_at))}}</td>
        <td>
            <div class="btn-group">
            <a href="{{route('recado.edit', ['recado' => $r->id])}}" class="btn btn-sm btn-info">Editar</a>
                <form action="{{route('recado.destroy', ['recado' => $r->id])}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger ml-2" type="submit">Deletar</button>
                </form>
            
        </td>

        </tr>
            @empty
            <tr>
            <td colspan='4'>Nada para mostrar!</td>
            </tr>
            @endforelse
        </tbody>
    
    </table>

</div>

@endsection

@section('subtitle')
Criar Recado
@endsection