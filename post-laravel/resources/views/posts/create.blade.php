@extends('layouts.app')

@section('content')

<form action="{{route('post.store')}}" method="post" class="bg-warning container w-50" style="height: 600px">
@csrf

    <div class="form-gruop">

        <label for="title">Título</label>
        <input type="text" name="title" id="title" class="form-control" value="{{old('title')}}">

    </div>

    <div class="form-gruop mt-2">

        <label for="description">Descrição</label>
        <input type="text" name="description" id="description" class="form-control" value="{{old('description')}}">

    </div>

    <div class="form-gruop mt-2">

        <label for="content">Conteúdo</label>
        <textarea name="content" id="content" cols="30" rows="10" class="form-control">{{old('content')}}</textarea>


    </div>

    <div class="form-gruop mt-2">

        <label for="slug">Slug</label>
        <input type="text" name="slug" id="slug" class="form-control" value="{{old('slug')}}">

    </div>

    <button class="btn btn-success mt-3" type="submit">Criar Postagem</button><br>
    <a href="{{route('post.index')}}">Voltar</a>
</form>

@endsection

@section('subtitle')
Criar Postagem
@endsection