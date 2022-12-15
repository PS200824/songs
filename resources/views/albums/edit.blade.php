@extends('lay.layout')
@section('content')
    <h2>Add a song:</h2>
    <form action="{{ route('albums.update', $albums) }}" method="POST">
        @csrf
        @method('PATCH')
        <label>Type the name of the song that you want to add:</label><br><br>
        <input type="text" value="{{ $albums->name }}" name="albumsName"><br><br>
        <input type="text" value="{{ $albums->year }}" name="year"><br><br>
        <input type="text" value="{{ $albums->times_sold }}" name="times_sold"><br><br>
        <button type="submit">Update</button>
    </form>
@endsection
