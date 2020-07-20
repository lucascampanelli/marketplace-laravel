@extends('layouts.app')

@section('content')
    <h1>Editar produto</h1>

    <form action="{{route('admin.products.update', ['product' => $product->id])}}" method="post">
    @csrf
    @method("PUT")

    <div class='form-group'>
        <label>Nome do produto</label>
        <input type="text" name='nome' class='form-control' value='{{$product->nome}}'>
    </div>

    <div class='form-group'>
        <label>Descrição</label>
        <input type="text" name='descricao' class='form-control' value='{{$product->descricao}}'>
    </div>

    <div class='form-group'>
        <label>Conteúdo</label>
        <textarea name="body" id="" cols="30" rows="10" class='form-control'>{{$product->body}}'</textarea>
    </div>

    <div class='form-group'>
        <label>Preço</label>
        <input type="text" name='price' class='form-control' value='{{$product->price}}'>
    </div>

    <div class='form-group'>
        <label>Slug</label>
    <input type="text" name='slug' class='form-control' value='{{$product->slug}}'>
    </div>

    <div class='form-group'>
        <button type="submit" class='btn btn-lg btn-success'>Atualizar produto</button>
    </div>

    </form>
@endsection;