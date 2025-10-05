@extends('landing.layouts.landing')
@section('title', 'Servicios')
@section('header')
    <h1>Servicios</h1>
@endsection
@section('content')
    @component('_components.card')
        @slot('title', 'Servicio 1');
        @slot('content')
            <p>Descripción breve del servicio 1.</p>
        @endslot
    @endcomponent
    @component('_components.card')
        @slot('title', 'Servicio 2');
        @slot('content')
            <p>Descripción breve del servicio 2.</p>
        @endslot
    @endcomponent
    @component('_components.card')
        @slot('title', 'Servicio 3');
        @slot('content')
            <p>Descripción breve del servicio 3.</p>
        @endslot
    @endcomponent
@endsection
