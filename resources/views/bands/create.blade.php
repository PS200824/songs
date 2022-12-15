@extends('lay.layout')

@section('content')
    <div class="flex flex-col items-center min-h-screen pt-6 bg-gray-100 sm:justify-center sm:pt-0">
        <div class="w-full px-16 py-20 mt-6 overflow-hidden bg-white rounded-lg lg:max-w-4xl">
            <div class="mb-4">
                <h1 class="font-serif text-3xl font-bold underline decoration-gray-400">
                    Create Bands
                </h1>
            </div>
            <form action="{{ route('bands.store') }}" method="POST">
                @csrf
                <label>Type the name of the song that you want to add:</label><br><br>
                <label>Name:</label>
                <input type="text" name="name"><br><br>
                <label>Genre:</label>
                <input type="text" name="genre"><br><br>
                <label>Founded</label>
                <input type="text" name="founded"><br><br>
                <input type="submit" value="Add">
            </form>
        </div>
    </div>
    @if ($errors->any())
        <div class="bg-red-400">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection