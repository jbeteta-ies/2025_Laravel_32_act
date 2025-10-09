@extends('layouts.app')

@section('title', 'Editar Nota')

@section('content')
    <h2>Editar Nota</h2>
    <form action="{{ route('note.update', $note->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Título:</label>
        <input type="text" name="title" value="{{ $note->title }}" required>

        <label>Descripción:</label>
        <textarea name="description" required>{{ $note->description }}</textarea>

        <label>Fecha:</label>
        <input type="date" name="date" value="{{ $note->date }}" required>

        <label>Completada:</label>
        <input type="checkbox" name="done" {{ $note->done ? 'checked' : '' }}>

        <button type="submit">Actualizar</button>
        <a href="{{ route('note.index') }}">Cancelar</a>
    </form>
@endsection