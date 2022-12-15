@extends('lay.layout')

@section('content')
    <h2>Add a song:</h2>
    <form action="{{ route('bands.update', $bands) }}" method="POST">
        @csrf
        @method('PATCH')
        <label>Type the name of the song that you want to add:</label><br><br>
        <input type="text" value="{{ $bands->name }}" name="bandsName"><br><br>
        <input type="text" value="{{ $bands->genre }}" name="genre"><br><br>
        <input type="text" value="{{ $bands->founded }}" name="founded"><br><br>
        <button type="submit">Update</button>
    </form>
@endsection
