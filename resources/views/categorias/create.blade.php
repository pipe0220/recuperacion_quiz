@extends('layouts.app')

@section('content')
    <h1>Crear nueva categoría</h1>
    <form action="{{ route('categorias.store') }}" method="POST">
        @csrf
        <div>
            <label for="descripcion">Descripción</label>
            <input type="text" name="descripcion" class="form-control" required>
        </div>
        <div>
            <label for="iva">IVA</label>
            <input type="number" step="0.01" name="iva" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Guardar</button>
    </form>
@endsection
