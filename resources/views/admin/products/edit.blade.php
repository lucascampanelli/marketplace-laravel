@extends('layouts.app')

@section('content')
    <h1>Editar produto</h1>

    <form action="{{route('admin.products.update', ['product' => $product->id])}}" method="post" enctype='multipart/form-data'>
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
        <label>Categorias</label>
        <select name="categories[]" id="" class="form-control" multiple>
            @foreach($categories as $category)
                <option value="{{$category->id}}" @if($product->categories->contains($category)) selected @endif>
                    {{$category->name}}
                </option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label>Fotos do produto</label>
        <input type='file' name='photos[]' class='form-control' multiple>
    </div>

    <div class='form-group'>
        <button type="submit" class='btn btn-lg btn-success'>Atualizar produto</button>
    </div>

    </form>

    <hr>

    <div class="row">
        @foreach($product->photos as $photo)
            <div class="col-4 text-center">
                <img src='{{asset("storage/" . $photo->image)}}' alt='' class='img-fluid'> {{-- Usar o método artisan storage:link --}}
                <form action='{{route("admin.photo.remove")}}' method='post'>
                    @csrf
                    <input type="hidden" name="photoName" value='{{$photo->image}}'>
                    <button type="submit" class='btn btn-lg btn-danger'>Remover</button>
                </form>
            </div>
        @endforeach
    </div>

@endsection