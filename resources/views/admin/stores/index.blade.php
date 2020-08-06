@extends('layouts.app')

@section('content')

    @if(!$store) {{-- Só será possível criar se o usuário não possuir uma loja --}}
        <a href="{{route('admin.stores.create')}}" class="btn btn-lg btn-success">Criar loja</a>
    @endif

    <table class='table table-striped'>
        <thead>
            <tr>
                <th>#</th>
                <th>Loja</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
                <tr>
                    <td>{{$store->id}}</td>
                    <td>{{$store->nome}}</td>
                    <td>
                        <div class='btn-group'>
                            <a href="{{route('admin.stores.edit', ['store' => $store->id])}}" class="btn btn-sm btn-primary">Editar</a>
                            <form action="{{route('admin.stores.destroy', ['store' => $store->id])}}" method="post">
                                @csrf
                                @method("DELETE")
                                <button type="submit" class="btn btn-sm btn-danger">Remover</button>
                            </form>
                        </div>
                    </td>
                </tr>
        </tbody>
    </table>
@endsection