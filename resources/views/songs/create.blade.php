<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div class="flex flex-col items-center min-h-screen pt-6 bg-gray-100 sm:justify-center sm:pt-0">
        <div class="w-full px-16 py-20 mt-6 overflow-hidden bg-white rounded-lg lg:max-w-4xl">
            <div class="mb-4">
                <h1 class="font-serif text-3xl font-bold underline decoration-gray-400">
                    Create Post
                </h1>
            </div>
            <form action="{{ route('songs.store') }}" method="POST">
                @csrf
                <label>Type the name of the song that you want to add:</label><br><br>
                <label>Title:</label>
                <input type="text" name="title"><br><br>
                <label>SInger:</label>
                <input type="text" name="singer"><br><br>
                <input type="submit" value="Add song">
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
</body>

</html>
