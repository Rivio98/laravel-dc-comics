@extends('layouts.app')

@section('content')
    <h1 class="my-4">{{ $comic->title }}</h1>
    <p><strong>Descrizione:</strong> {{ $comic->description }}</p>
    <p><strong>Prezzo:</strong> {{ $comic->price }} €</p>
    <p><strong>Serie:</strong> {{ $comic->series }}</p>
    <p><strong>Data di Uscita:</strong> {{ $comic->sale_date }}</p>
    <p><strong>Tipo:</strong> {{ $comic->type }}</p>
    <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}" class="img-fluid my-4">

    <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-warning">Modifica</a>
    <form action="{{ route('comics.destroy', $comic->id) }}" method="POST" style="display:inline-block;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger"
            onclick="return confirm('Sei sicuro di voler eliminare questo fumetto?')">Elimina</button>
    </form>
    <a href="{{ route('comics.index') }}" class="btn btn-secondary">Torna all'elenco</a>
@endsection
