@extends('layouts.app')

@section('content')
    <h1>Editar categoría</h1>
    <form action="{{ route('categorias.update', ['categoria' => $categoria->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="descripcion">Descripción</label>
            <input type="text" name="descripcion" id="descripcion" value="{{ $categoria->descripcion }}" required>
        </div>
        <div>
            <label for="iva">IVA</label>
            <input type="number" step="0.01" name="iva" id="iva" value="{{ $categoria->iva }}" required>
        </div>
        <button type="submit">Actualizar</button>
    </form>
@endsection
