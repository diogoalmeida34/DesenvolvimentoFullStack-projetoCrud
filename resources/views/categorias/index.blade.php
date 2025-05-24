@extends('layouts.app')

@section('content')
<h1 class="mb-4">Categorias</h1>

<a href="{{ route('categorias.create') }}" class="btn btn-primary mb-3">Nova Categoria</a>

@if($categorias->isEmpty())
    <p>Nenhuma categoria cadastrada.</p>
@else
    <ul class="list-group">
        @foreach ($categorias as $cat)
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <div>
                <strong>{{ $cat->nome }}</strong><br>
                @if($cat->imagem)
                    <img src="{{ asset('storage/' . $cat->imagem) }}" alt="Imagem" style="max-height: 50px;">
                @endif
            </div>
            <div>
                <a href="{{ route('categorias.edit', $cat) }}" class="btn btn-sm btn-warning me-2">Editar</a>
                <a href="{{ route('categorias.confirm-delete', $cat) }}" class="btn btn-sm btn-danger">Excluir</a>
            </div>
        </li>
        @endforeach
    </ul>
@endif
@endsection
