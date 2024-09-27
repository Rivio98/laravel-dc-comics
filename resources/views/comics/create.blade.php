@extends('layouts.app')

@section('content')
    <h1 class="my-4">Crea un Nuovo Fumetto</h1>

    <form action="{{ route('comics.store') }}" method="POST" class="needs-validation" novalidate>
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" required>
            <div class="invalid-feedback">Inserisci un titolo valido.</div>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
            <div class="invalid-feedback">Inserisci una descrizione valida.</div>
        </div>

        <div class="mb-3">
            <label for="thumb" class="form-label">URL Immagine</label>
            <input type="url" class="form-control" id="thumb" name="thumb" required>
            <div class="invalid-feedback">Inserisci un URL valido.</div>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="number" step="0.01" class="form-control" id="price" name="price" required>
            <div class="invalid-feedback">Inserisci un prezzo valido.</div>
        </div>

        <div class="mb-3">
            <label for="series" class="form-label">Serie</label>
            <input type="text" class="form-control" id="series" name="series" required>
            <div class="invalid-feedback">Inserisci una serie valida.</div>
        </div>

        <div class="mb-3">
            <label for="sale_date" class="form-label">Data di Uscita</label>
            <input type="date" class="form-control" id="sale_date" name="sale_date" required>
            <div class="invalid-feedback">Inserisci una data valida.</div>
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Tipo</label>
            <input type="text" class="form-control" id="type" name="type" required>
            <div class="invalid-feedback">Inserisci un tipo valido.</div>
        </div>

        <button type="submit" class="btn btn-primary">Salva</button>
        <a href="{{ route('comics.index') }}" class="btn btn-secondary">Annulla</a>
    </form>
@endsection
