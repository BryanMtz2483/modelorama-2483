<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" />
    <title>Index Calculadora</title>
</head>
<body>
    <x-alerta tipo='info'> 
        Hola index 
    </x-alerta>

    <x-title1 tipo="danger"> 
        Hola tittle 
    </x-title1>
    
    </div>

    <div class="container">
        @if ($nombre == "beto")
            <p>Hola señor random</p>
        @else
            <p>Hola: {{$nombre}}</p>
        @endif
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
</body>
</html>