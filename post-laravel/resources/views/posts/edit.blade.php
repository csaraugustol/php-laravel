@extends('layouts.app')

@section('content')

<form action="{{route('post.update', ['post' => $post->id])}}" method="post" 
class="bg-warning container w-50" style="height: 600px">
@csrf
@method('PUT')

    <div class="form-gruop">

        <label for="title">Título</label>
        <input type="text" name="title" id="title" class="form-control" value="{{$post->title}}">

    </div>

    <div class="form-gruop">

        <label for="description">Descrição</label>
        <input type="text" name="description" id="description" class="form-control" value="{{$post->description}}">

    </div>

    <div class="form-gruop">

        <label for="content">Conteúdo</label>
        <textarea name="content" id="content" cols="30" rows="10" class="form-control">{{$post->content}}</textarea>


    </div>

    <div class="form-gruop">

        <label for="slug">Slug</label>
        <input type="text" name="slug" id="slug" class="form-control" value="{{$post->slug}}">

    </div>

    <button class="btn btn-success mt-3" type="submit">Alterar Postagem</button><br>

    <a href="{{route('post.index')}}">Voltar</a>
</form>



@endsection

@section('subtitle')
Criar Postagem
@endsection


