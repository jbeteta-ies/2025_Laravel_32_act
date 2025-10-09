@extends('layouts.app')

@section('title', 'Listado de Notas')

@section('content')
    <h2>Listado de Notas</h2>

    @forelse ($notes as $note)
        <div>
            <h3><a href="{{ route('note.show', $note->id) }}">{{ $note->title }}</a></h3>
            <p>{{ $note->description }}</p>
            <small>{{ $note->date }}</small>
            <div>
                <a href="{{ route('note.edit', $note->id) }}">Editar</a>
                <form action="{{ route('note.destroy', $note->id) }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </div>
        </div>
    @empty
        <p>No hay notas disponibles.</p>
    @endforelse
@endsection