@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Nova Categoria</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $erro)
                    <li>{{ $erro }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('categorias.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="nome">Nome da Categoria</label>
            <input type="text" name="nome" id="nome" class="form-control" value="{{ old('nome') }}" required>
            <br>
        </div>
        <div class="form-group mt-2">
            <label for="imagem">Imagem da Categoria</label>
            <input type="file" name="imagem" id="imagem" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary mt-3">Salvar</button>
        <a href="{{ route('categorias.index') }}" class="btn btn-secondary mt-3">Voltar</a>
    </form>
</div>
@endsection
