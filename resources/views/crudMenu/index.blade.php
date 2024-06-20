<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <section>
        <div>
            <div>
                <h1>Administrador</h1>
            </div>
        </div>
        <div>
            <a href="{{ route('crudMenu.create') }}">Ingresar nuevos datos al menu</a>
        </div>
        <div>
            <ul>
            @foreach ($datos as $datos)
                <li>
                    <a href="{{ route('crudMenu.show', $datos->id) }}">
                        {{ $datos->nombre }}
                    </a>
                </li>
            @endforeach
        </ul>
        </div>
        <div>
            <a href="{{ route('logout') }}"><button type="button">Salir</button></a>
        </div>
    </section>

</body>

</html>
