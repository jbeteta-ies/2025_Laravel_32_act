@extends('layouts.app')

@section('title', 'Detalle de Nota')

@section('content')
    <h2>{{ $note->title }}</h2>
    <p>{{ $note->description }}</p>
    <p>Fecha: {{ $note->date }}</p>
    <p>Estado: {{ $note->done ? 'Completada' : 'Pendiente' }}</p>
    <a href="{{ route('note.index') }}">Volver</a>
@endsection