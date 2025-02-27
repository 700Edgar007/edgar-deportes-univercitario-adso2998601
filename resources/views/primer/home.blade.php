<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Eventos Deportivos</title>
    <link rel="stylesheet" href="css/estilos.css">
    <style>
        body {
            background: url(https://cdn.pixabay.com/photo/2023/10/04/14/15/man-8293794_1280.jpg);
            
            
            
        }
    </style>
</head>

<body>

    <header>
        <h1>Gestión de Eventos Deportivos Universitarios</h1>
    </header>

    <nav>
        <button><a href="{{ route('primer.index') }}">Equipos</a></button>
        <button><a href="{{ route('primer.create') }}">Partidos</a></button>
        {{-- <button><a href="{{ route('primer.show', 0) }}">Resultados</a></button> --}}
        <button><a href="{{ route('primer.edit', 0) }}">Notificaciones</a></button>
    </nav>

    <div class="container">
        <h1>Bienvenido al Sistema de Gestión de Eventos Deportivos</h1>
        <br>
        <div class="buttons">
            <button><a href="{{ route('segundo.index', 0) }}">Registrarse</a></button>
        </div>
    </div>

    <footer>
        &copy; 2025 Universidad Deportiva - Todos los derechos reservados
    </footer>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background-color: #f4f4f4;
            color: #333;
        }

        header {
            background-color: rgba(0, 123, 255, 0.7);
            color: white;
            padding: 15px;
            text-align: center;
            font-size: 24px;
            font-weight: bold;
        }

        nav {
            display: flex;
            justify-content: center;
            background-color: rgba(0, 86, 179, 0.4);
            padding: 10px;
            gap: 10px;
            backdrop-filter: blur(5px);
        }

        nav button {
            background-color: rgba(0, 123, 255, 0.9);
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }

        nav button a {
            background-color: rgba(0, 123, 255, 0.9);
            color: white;
            color width;
            text-decoration: none;
            font-size: 18px;
        }

        nav button:hover {
            background-color: rgba(0, 68, 148, 0.9);
        }


        .container {
            text-align: center;
            padding: 50px 20px;
        }

        .container h1 {
            font-size: 36px;
            color: hsl(210, 100%, 99%);
        }

        .container p {
            font-size: 18px;
            margin: 20px 0;
        }

        .buttons a {
            
            background-color: #007bff;
            color: white;
            padding: 12px 20px;
            font-size: 18px;
            transition: 0.3s;
        }

        .buttons a:hover {
            background-color: #004494;
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px;
            position: absolute;
            bottom: 0;
            width: 100%;
        }
    </style>

</body>

</html>
