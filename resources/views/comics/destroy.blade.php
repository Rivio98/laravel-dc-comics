<form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" onclick="return confirm('Sei sicuro?')">Cancella</button>
</form>
