@extends('layouts.app')

@section('page-title', 'Form di Creazione')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="mt-3 mb-3">Inserisci un nuovo studente</h1>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            <form action="{{ route('students.store') }}" method="post">
                @csrf
                    <div class="form-group">
                        <label for="nome">Nome</label>
                    <input type="text" name="name" class="form-control" id="nome" placeholder="Nome dello studente" value="{{ old('name') }}">
                    </div>
                    <div class="form-group">
                        <label for="cognome">Cognome</label>
                        <input type="text" name="surname" class="form-control" id="cognome" placeholder="Cognome dello studente" value="{{ old('surname') }}">
                    </div>
                    <div class="form-group">
                        <label for="matricola">Matricola</label>
                        <input type="number" name="code" class="form-control" id="matricola" placeholder="Numero di matricola dello studente" value="{{ old('code') }}">
                    </div>
                    <div class="form-group">
                        <label for="email">Posta Elettronica</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="E-mail dello studente" value="{{ old('email') }}">
                    </div>
                    <div class="form-group">
                        <label for="info">Note</label>
                        <textarea type="text" name="note" class="form-control" id="info" placeholder="Note aggiuntive">{{ old('note') }}</textarea>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <button type="submit" class="btn btn-primary">Salva</button>
                        <a class="btn btn-outline-dark" href="{{ route('students.index')}}">
                            Indietro
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
