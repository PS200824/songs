<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h2>Add a song:</h2>
    <form action="/songs/{{ $songs->id }}" method="POST">
        @csrf
        @method('PATCH')
        <label>Type the name of the song that you want to add:</label><br><br>
        <input type="text" value="{{ $songs->title }}" name="title"><br><br>
        <input type="text" value="{{ $songs->singer }}" name="singer"><br><br>
        <button type="submit">Update</button>
    </form>
</body>

</html>
