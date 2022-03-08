<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    </head>
    <body class="antialiased">
        <form action="{{route('Usuario.Store')}}" method="POST">
            {{csrf_field()}}
            {{ method_field('POST')}}
            <label for="">Nombre</label>
            <input type="text" name="nombre">
            <label for="">Correo</label>
            <input type="text" name="correo">
            <button type="submit">Enviar</button>
        </form>
    </body>
</html>
