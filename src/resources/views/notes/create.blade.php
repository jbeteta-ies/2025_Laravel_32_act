@extends('layouts.app')

@section('title', 'Crear Nueva Nota')

@section('content')
    <h2>Crear Nota</h2>
    <form action="{{ route('note.store') }}" method="POST">
        @csrf
        <label>Título:</label>
        <input type="text" name="title" required>

        <label>Descripción:</label>
        <textarea name="description" required></textarea>

        <label>Fecha:</label>
        <input type="date" name="date" required>

        <label>Completada:</label>
        <input type="checkbox" name="done">

        <button type="submit">Guardar</button>
        <a href="{{ route('note.index') }}">Cancelar</a>
    </form>
@endsection