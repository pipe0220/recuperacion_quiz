@extends('layouts.app')

@section('content')
    <h1>{{ $categoria->descripcion }}</h1>
    <p>IVA: {{ $categoria->iva }}</p>
    <a href="{{ route('categorias.index') }}">Volver a la lista</a>
@endsection
