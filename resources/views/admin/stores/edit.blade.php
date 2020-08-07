@extends('layouts.app')

@section('content')
    <h1>Criar loja</h1>
    <form action="{{route('admin.stores.update', ['store' => $store->id])}}" method="post">
    @csrf
    @method("PUT")

    <div class='form-group'>
        <label>Nome da loja</label>
    <input type="text" name='nome' class='form-control' value='{{$store->nome}}'>
    </div>

    <div class='form-group'>
        <label>Descrição</label>
        <input type="text" name='descricao' class='form-control' value='{{$store->descricao}}'>
    </div>

    <div class='form-group'>
        <label>Telefone</label>
        <input type="text" name='telefone' class='form-control' value='{{$store->telefone}}'>
    </div>

    <div class='form-group'>
        <label>Celular/Whatsapp</label>
        <input type="text" name='celular' class='form-control' value='{{$store->celular}}'>
    </div>

    <div class='form-group'>
        <label>Slug</label>
        <input type="text" name='slug' class='form-control' value='{{$store->slug}}'>
    </div>
    
    <div class='form-group'>
        <button type="submit" class='btn btn-lg btn-success'>Atualizar loja</button>
    </div>
    
    </form>
@endsection