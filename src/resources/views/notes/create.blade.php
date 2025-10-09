@extends('layouts.app')

@section('title', 'Crear nueva Nota')

@section('content')
    <h2>Editar Nota</h2>
    <form action="{{ route('note.store') }}" method="POST">
        @csrf
        <label>Título:</label>
        <input type="text" name="title" value="{{ old('title') }}" required>
        @error('title')
            <small style="color:red">{{ $message }}</small>
        @enderror

        <label>Descripción:</label>
        <textarea name="description" required>{{ old('description') }}</textarea>
        @error('description')
            <small style="color:red">{{ $message }}</small>
        @enderror

        <label>Fecha:</label>
        <input type="date" name="date" value="{{ old('date') }}" required>
        @error('date')
            <small style="color:red">{{ $message }}</small>
        @enderror

        <label>Completada:</label>
        <input type="checkbox" name="done" {{ old('done') ? 'checked' : '' }}>

        <button type="submit">Guardar</button>
        <a href="{{ route('note.index') }}">Cancelar</a>
        @error('done')
            <small style="color:red">{{ $message }}</small>
        @enderror
    </form>
@endsection
