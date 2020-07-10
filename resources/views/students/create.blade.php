@extends('layouts.app')

@section('page-title', 'Form di Creazione')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="mt-3 mb-3">Inserisci un nuovo studente</h1>
            <form action="{{ route('students.store') }}" method="post">
                @csrf
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" name="name" class="form-control" id="nome" placeholder="Nome dello studente">
                    </div>
                    <div class="form-group">
                        <label for="cognome">Cognome</label>
                        <input type="text" name="surname" class="form-control" id="cognome" placeholder="Cognome dello studente">
                    </div>
                    <div class="form-group">
                        <label for="matricola">Matricola</label>
                        <input type="number" name="code" class="form-control" id="matricola" placeholder="Numero di matricola dello studente">
                    </div>
                    <div class="form-group">
                        <label for="email">Posta Elettronica</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="E-mail dello studente">
                    </div>
                    <div class="form-group">
                        <label for="info">Note</label>
                        <textarea type="text" name="note" class="form-control" id="info" placeholder="Note aggiuntive"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Salva</button>
                </form>
            </div>
        </div>
    </div>
@endsection
