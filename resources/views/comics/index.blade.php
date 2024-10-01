@extends('layouts.app')

@section('content')
    <h1 class="my-4">Elenco dei Fumetti</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

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
                        <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-warning btn-sm">Modifica</a>
                        <form action="{{ route('comics.destroy', $comic->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"
                                onclick="return confirm('Sei sicuro di voler eliminare questo fumetto?')">Elimina</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('comics.create') }}" class="btn btn-success">Aggiungi un nuovo fumetto</a>
@endsection
