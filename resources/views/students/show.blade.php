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
                <li>Info: {{ $studente->note }}</li>
                </ul>
                <div class="allinea-bottoni">
                    <a class="btn btn-outline-primary btn-sm" href="{{ route('students.index')}}">
                        Indietro
                    </a>
                    <a class="btn btn-outline-secondary btn-sm" href="{{ route('students.edit', ['student' => $studente->id])}}">
                        Modifica
                    </a>
                    <form action="{{ route('students.destroy', ['student' => $studente->id])}}" method="post">
                        @method('DELETE')
                        @csrf
                        <input type='submit' class="btn btn-outline-danger btn-sm" value="Cancella">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
