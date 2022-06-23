<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <header>
        <a href="/header">Link</a>
    </header>
    <h1>HELLO WORLD</h1>
    <h2>Benvenuto, sono {{ $name }} {{ $lastname }}</h2>
    <ul>
        @foreach ($tanks as $tank)
            <li>Nome: {{ $tank['name'] }}</li>
            <li>Nazione dove è stato prodotto: {{ $tank['state'] }}</li>
            <li>Classificazione: {{ $tank['role'] }}</li> 
            <li>--------------------------------</li>
        @endforeach
    </ul>
   
</body>
</html>