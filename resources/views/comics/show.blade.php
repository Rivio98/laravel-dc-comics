@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h2>{{ $comic->title }}</h2>
        </div>
        <div class="card-body">
            <img src="{{ $comic->thumb }}" class="img-fluid mb-3" alt="{{ $comic->title }}">
            <p class="card-text">{{ $comic->description }}</p>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Prezzo: {{ $comic->price }} €</li>
                <li class="list-group-item">Serie: {{ $comic->series }}</li>
                <li class="list-group-item">Data di uscita: {{ $comic->sale_date }}</li>
                <li class="list-group-item">Tipo: {{ $comic->type }}</li>
            </ul>
        </div>
        <div class="card-footer text-center">
            <a href="{{ route('comics.index') }}" class="btn btn-primary">Torna alla lista</a>
        </div>
    </div>
@endsection
