@extends('layouts.app')

@section('content')
    <h1 class="my-4">Elenco dei Fumetti</h1>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Titolo</th>
                <th>Prezzo</th>
                <th>Serie</th>
                <th>Data di Uscita</th>
                <th>Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($comics as $comic)
                <tr>
                    <td>{{ $comic->title }}</td>
                    <td>{{ $comic->price }} €</td>
                    <td>{{ $comic->series }}</td>
                    <td>{{ $comic->sale_date }}</td>
                    <td>
                        <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-info btn-sm">Visualizza</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('comics.create') }}" class="btn btn-success">Aggiungi un nuovo fumetto</a>
@endsection
