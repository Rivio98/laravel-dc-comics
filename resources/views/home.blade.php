@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1 class="text-primary">Benvenuto nell'Archivio Fumetti</h1>
        <p class="lead">Esplora</p>
        <a href="{{ route('comics.index') }}" class="btn btn-primary btn-lg">Visualizza Fumetti</a>
    </div>
@endsection
