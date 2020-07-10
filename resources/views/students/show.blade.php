@extends('layouts.app')

@section('page-title', 'Info studente')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="mt-3 mb-3">Info Studente</h1>
                <ul>
                <li>ID: {{ $studente->id }}</li>
                <li>Nome: {{ $studente->name }}</li>
                <li>Cognome: {{ $studente->surname }}</li>
                </ul>
            </div>
        </div>
    </div>
@endsection
