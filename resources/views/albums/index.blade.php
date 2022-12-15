@extends('lay.layout')

@section('content')
    <P class="font-mono text-blue-600">Albums:</P>
    <br>
    <div class="overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
        <div class="inline-block min-w-full overflow-hidden align-middle border-b border-gray-200 shadow sm:rounded-lg">
        </div>
    </div>
    @foreach ($albums as $album)
        <div class="bg-slate-100 grid grid-cols-5 m-24 rounded-md">

            <div><a href="/albums/{{ $album->name }}">{{ $album->name }}</a></div>
            <div><a href="/albums/{{ $album->year }}">{{ $album->year }}</a></div>
            <div><a href="/albums/{{ $album->times_sold }}">{{ $album->times_sold }}</a></div>
            <div><a class="px-4 py-1 rounded-md bg-green-500 text-sky-100 hover:bg-green-600"
                    href="{{ route('albums.edit', $album) }}">edit</a></div>
            <div>
                <form action="{{ route('albums.destroy', $album) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="px-4 py-1 rounded-md bg-red-500 text-sky-100 hover:bg-red-600"
                        type="submit">delete</button>
                </form>
            </div>
            <br>
        </div>
    @endforeach
    <div><a class="px-4 py-1 rounded-md bg-sky-500 text-sky-100 hover:bg-sky-600"
            href="{{ route('albums.create', $album) }}">
            Create a new product</a></div>
@endsection
