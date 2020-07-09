@extends('layouts.app')

@section('page-title', 'lista-studenti')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="mt-3 mb-3">Lista Studenti</h1>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Cognome</th>
                            <th>Matricola</th>
                            <th>E-Mail</th>
                            <th>Azioni</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($studenti as $studente)
                        <tr>
                            <td>{{ $studente->id }}</td>
                            <td>{{ $studente->name }}</td>
                            <td>{{ $studente->surname }}</td>
                            <td>{{ $studente->code }}</td>
                            <td>{{ $studente->email }}</td>
                            <td>
                                <a class="btn btn-info" href="/students/{{ $studente->id }}">Dettagli</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
