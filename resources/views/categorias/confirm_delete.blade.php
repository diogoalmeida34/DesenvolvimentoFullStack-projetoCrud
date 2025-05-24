@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Excluir Categoria</h1>

    <p>Tem certeza que deseja excluir a categoria <strong>{{ $categoria->nome }}</strong>?</p>

    <form action="{{ route('categorias.destroy', $categoria->id) }}" method="POST">
        @csrf
        @method('DELETE')

        <button type="submit" class="btn btn-danger">Sim, excluir</button>
        <a href="{{ route('categorias.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
