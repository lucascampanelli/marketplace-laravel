@extends('layouts.app')

@section('content')
    <h1>Criar produto</h1>
    <form action="{{route('admin.products.store')}}" method="post">
    @csrf
    
    <div class='form-group'>
        <label>Nome do produto</label>
        <input type="text" name='nome' class='form-control @error("nome") is-invalid @enderror' value='{{old("nome")}}'>
        @error('nome')
            <div class="invalid-feedback">
                {{$message}}
            </div>
        @enderror
    </div>

    <div class='form-group'>
        <label>Descrição</label>
        <input type="text" name='descricao' class='form-control @error("nome") is-invalid @enderror' value='{{old("descricao")}}'>
        @error('descricao')
            <div class="invalid-feedback">
                {{$message}}
            </div>
        @enderror
    </div>

    <div class='form-group'>
        <label>Conteúdo</label>
        <textarea name="body" id="" cols="30" rows="10" class='form-control @error("nome") is-invalid @enderror' value='{{old("body")}}'></textarea>
        @error('body')
            <div class="invalid-feedback">
                {{$message}}
            </div>
        @enderror
    </div>

    <div class='form-group'>
        <label>Preço</label>
        <input type="text" name='price' class='form-control @error("nome") is-invalid @enderror' value='{{old("price")}}'>
        @error('price')
            <div class="invalid-feedback">
                {{$message}}
            </div>
        @enderror
    </div>
    
    <div class='form-group'>
        <label>Slug</label>
        <input type="text" name='slug' class='form-control'>
    </div>

    <div class='form-group'>
        <button type="submit" class='btn btn-lg btn-success'>Criar produto</button>
    </div>

    </form>
@endsection