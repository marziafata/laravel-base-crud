@extends('layouts.app')

@section('page-title', 'Info studente')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="mt-3 mb-3">Benvenuto nel mio primo gestionale!</h1>
                <a class="btn btn-dark" href="{{ route('students.index')}}">Entra</a>
            </div>
        </div>
    </div>
@endsection
