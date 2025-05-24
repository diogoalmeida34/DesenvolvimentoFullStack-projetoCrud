@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Categoria</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $erro)
                    <li>{{ $erro }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('categorias.update', $categoria->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nome">Nome da Categoria</label>
            <input type="text" name="nome" id="nome" class="form-control" value="{{ old('nome', $categoria->nome) }}" required>
        </div>

        <div class="form-group mt-2">
            <label for="imagem">Nova Imagem</label>
            <input type="file" name="imagem" id="imagem" class="form-control">
        </div>

        @if($categoria->imagem)
            <div class="mt-3">
                <p>Imagem atual:</p>
                <img src="{{ asset('storage/' . $categoria->imagem) }}" alt="Imagem da categoria" style="max-width: 200px;">
            </div>
        @endif

        <button type="submit" class="btn btn-success mt-3">Atualizar</button>
        <a href="{{ route('categorias.index') }}" class="btn btn-secondary mt-3">Cancelar</a>
    </form>
</div>
@endsection
