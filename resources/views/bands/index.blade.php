@extends('lay.layout')

@section('content')
    <div class="overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
        <div class="inline-block min-w-full overflow-hidden align-middle border-b border-gray-200 shadow sm:rounded-lg">
        </div>
    </div>
    @foreach ($bands as $band)
        <div class="grid grid-cols-5">
            <div><a href="/bands/{{ $band->band }}">{{ $band->name }}</a></div>
            <div><a href="/bands/{{ $band->band }}">{{ $band->genre }}</a></div>
            <div><a href="/bands/{{ $band->band }}">{{ $band->founded }}</a></div>
            <div><a class="px-4 py-1 rounded-md bg-green-500 text-sky-100 hover:bg-green-600"
                    href="{{ route('bands.edit', $band) }}">edit</a></div>
            <div>
                <form action="{{ route('bands.destroy', $band) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input class="px-4 py-1 rounded-md bg-red-500 text-sky-100 hover:bg-red-600" type="submit"
                        value="Delete">
                </form>
            </div>
        </div>
    @endforeach
    <div><a class="px-4 py-1 rounded-md bg-sky-500 text-sky-100 hover:bg-sky-600" href="{{ route('bands.create', $band) }}">
            Create a new product</a></div>
@endsection
