@extends('layouts.app')

@section('content')
    <h1>Criar loja</h1>
    <form action="{{route('admin.stores.store')}}" method="post">
    <input type="hidden" name="_token" value='{{csrf_token()}}' class='form-control'>
    <div class='form-group'>
        <label>Nome da loja</label>
        <input type="text" name='nome' class='form-control'>
    </div>
    <div class='form-group'>
        <label>Descrição</label>
        <input type="text" name='descricao' class='form-control'>
    </div>
    <div class='form-group'>
        <label>Telefone</label>
        <input type="text" name='telefone' class='form-control'>
    </div>
    <div class='form-group'>
        <label>Celular/Whatsapp</label>
        <input type="text" name='celular' class='form-control'>
    </div>
    <div class='form-group'>
        <label>Slug</label>
        <input type="text" name='slug' class='form-control'>
    </div>
    <div class='form-group'>
        <button type="submit" class='btn btn-lg btn-success'>Criar loja</button>
    </div>
    </form>
@endsection