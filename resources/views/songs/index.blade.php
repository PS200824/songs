@extends('lay.layout')

@section('content')
    <P class="font-mono text-blue-600">Songs:</P>
    <br>
    <div class="bg-slate-100 grid grid-cols-3 m-24 rounded-md">
        @foreach ($songs as $song)
            <div class="ml-10 mt-10"><a href="songs/{{ $song->id }}">{{ $song->title }}</a></div>
            <div><a href="songs/{{ $song->id }}">{{ $song->singer }}</a></div>
            <div><a class="text-blue-600" href="songs/{{ $song->id }}/edit">edit</a></div><br>
            <div>
                <form action="/songs/{{ $song->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="text-red-600" type="submit">delete</button>
                </form>
            </div>
            <br>
        @endforeach
    </div>
    <div><a class="text-blue-900" href="{{ route('songs.create') }}"> Create a new
            song:</a>
    </div>
@endsection
