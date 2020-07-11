@extends('layouts.app')

@section('page-title', 'lista-studenti')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex align-items-center">
                    <h1 class="mt-3 mb-3">Lista Studenti</h1>
                    <a class="btn btn-outline-success btn-sm" href="{{ route('students.create')}}"><strong>+</strong></a>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Cognome</th>
                            <th>Matricola</th>
                            <th>E-Mail</th>
                            <th class="text-right">Azioni</th>
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
                            <td class="text-right">
                                <a class="btn btn-outline-primary btn-sm" href="{{ route('students.show', ['student' => $studente->id])}}">
                                    Dettagli
                                </a>
                                <a class="btn btn-outline-secondary btn-sm" href="{{ route('students.edit', ['student' => $studente->id])}}">
                                    Modifica
                                </a>
                                <form action="{{ route('students.destroy', ['student' => $studente->id])}}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <input type='submit' class="btn btn-outline-danger btn-sm" value="Cancella">
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
