<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>

<body>
    <h1>Home</h1>

    @auth
        <p>Bienvenido {{ auth()->user()->name ?? auth()->user()->username }} estás autenticado a la página</p>
        <p>
            <a href="/logout">Logout</a>
        </p>
    @endauth

    @guest
        <p>Para ver el contenido <a href="/login">Inicia sesión</a></p>
    @endguest

</body>

</html>
