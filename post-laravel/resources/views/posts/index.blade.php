@extends('layouts.app')

@section('content')

<div class="row">

    <div class="col-sm-12">
        <a href="{{route('post.create')}}" class="btn btn-success float-right">Criar Postagens</a>
        <h2>Postagens Blog</h2>
        <div class="clearfix"></div>
    </div>




    <table class="table table-striped bg-warning container text-center">
        <thead>
            <tr>
                <th>#</th>
                <th>Título</th>
                <th>Autor</th>
                <th>Status</th>
                <th>Criado em</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
        @forelse($posts as $post)
        <tr>
        <td>{{$post->id}}</td>
        <td>{{$post->title}}</td>
        <td>{{$post->user->name}}</td>
        <td>
        @if($post->is_active)
            <span class="bagde badge-success p-1">Ativo</span>
            @else
            <span class="bagde badge-danger p-1">Inativo</span>
            @endif
        </td>
        <td>{{date('d/m/y H:i:s', strtotime($post->created_at))}}</td>
        <td>
        <div class="btn-group">
        <a href="{{route('post.edit', ['post' => $post->id])}}" class="btn btn-sm btn-primary">Editar</a>
        <form action="{{route('post.destroy', ['post' => $post->id])}}" method="post">
            @csrf
            @method('DELETE')
            <button class="btn btn-sm btn-danger ml-2" type="submit">Deletar</button>
        </form>


        </div>
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
Postagens Blog
@endsection