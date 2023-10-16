<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <style> solo tag style o inline</style> --}}
    <title>Document</title>
</head>
<body>
    <h1> Grazie per averci contattato {{$user_data['name']}}</h1>
    <p> Ti ricontatteremo al più presto</p>

    <p>{{$user_data['message']}}></p>
</body>
</html>