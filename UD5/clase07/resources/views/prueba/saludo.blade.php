<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
    @if ($informal)
        Hola mundo!
    @else 
        Buenos días mundo!
    @endif
    </h1>
    {{ $informal }}

    <h2>Lista de números</h2>
    @foreach ($numeros as $numero)
        <li>Número {{ $numero }}</li>
    @endforeach
</body>
</html>