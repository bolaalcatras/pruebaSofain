<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Ingresa nuevos datos</h1>

        <form action="{{ route('crudMenu.store') }}" method="POST">

            @csrf
            
            <label>
                Ingresa el nombre de la categoria:
                <input type="text" name="nombre">
            </label>
            <br>
            <br>
            <label>
                Ingresa el color:
                <input type="text" name="color">
            </label>
            <br>
            
            <button type="submit">Enviar</button>

        </form>
    </div>
</body>
</html>