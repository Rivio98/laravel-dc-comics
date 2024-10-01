@extends('layouts.app')

@section('content')
    <h1 class="my-4">Modifica Fumetto: {{ $comic->title }}</h1>

    <form action="{{ route('comics.update', $comic->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title">Titolo</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                value="{{ old('title', $comic->title) }}">
            @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="description">Descrizione</label>
            <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description">{{ old('description', $comic->description) }}</textarea>
            @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="thumb">URL Immagine</label>
            <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb" name="thumb"
                value="{{ old('thumb', $comic->thumb) }}">
            @error('thumb')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="price">Prezzo</label>
            <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price"
                value="{{ old('price', $comic->price) }}">
            @error('price')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="series">Serie</label>
            <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series"
                value="{{ old('series', $comic->series) }}">
            @error('series')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="sale_date">Data di Uscita</label>
            <input type="date" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date"
                name="sale_date" value="{{ old('sale_date', $comic->sale_date) }}">
            @error('sale_date')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="type">Tipo</label>
            <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" name="type"
                value="{{ old('type', $comic->type) }}">
            @error('type')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Aggiorna</button>
    </form>
@endsection
