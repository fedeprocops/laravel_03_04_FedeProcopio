<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Sei stato contattato da: {{$user_data['name']}}</h1>
    <h3>Ti ha lasciato questo messaggio:</h3>
    <p>{{$user_data['message']}}</p>
</body>
</html>