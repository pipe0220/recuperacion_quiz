@extends('layouts.app')

@section('content')
    <h1>Categorías</h1>
    <a href="{{ route('categorias.create') }}">Crear nueva categoría</a>
    <ul>
        @foreach ($categorias as $categoria)
            <li>
                <a href="{{ route('categorias.show', ['categoria' => $categoria->id]) }}">{{ $categoria->descripcion }}</a>
                <a href="{{ route('categorias.edit', ['categoria' => $categoria->id]) }}">Editar</a>
                <form action="{{ route('categorias.destroy', ['categoria' => $categoria->id]) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection

