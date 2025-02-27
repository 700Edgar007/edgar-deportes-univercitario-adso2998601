<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Eventos Deportivos</title>
    <link rel="stylesheet" href="css/estilos.css">
    <style>
        body {
            background: url(https://media.istockphoto.com/id/1188462138/es/foto/variedad-de-accesorios-deportivos-en-superficie-de-madera.jpg?s=2048x2048&w=is&k=20&c=KLxj31KNt4aGDIE-Jy5BcjVNUvK7KW7G5MAPAJJwjlY=);

            background-size: 100vw 100vh;

        }
    </style>
</head>

<body>

    <header>
        <h1>Equipos</h1>
    </header>

    <nav>
        <button><a href="{{ route('primer.index') }}">Equipos</a></button>
        <button><a href="{{ route('primer.create') }}">Partidos</a></button>
        {{-- <button><a href="{{ route('primer.show', 0) }}">Resultados</a></button> --}}
        <button><a href="{{ route('primer.edit', 0) }}">Notificaciones</a></button>
        <button><a href="{{ route('segundo.show', 0) }}">bolver al home</a></button>
    </nav>


    <div class="container">
        <table>
            <tr>
                <th>Equipo 1</th>
                <th>Equipo 2</th>
                <th>deporte</th>
                
            </tr>
            <tr>
                <td contenteditable="true">ADSO tarde</td>
                <td contenteditable="true">cafetera</td>
                <td contenteditable="true">futbol</td>
                
            </tr>
            <tr>
                <td contenteditable="true">reposteria</td>
                <td contenteditable="true">mecanica</td>
                <td contenteditable="true">baloncesto</td>
                
            </tr>
            <tr>
                <td contenteditable="true">ADSO noche</td>
                <td contenteditable="true">industria</td>
                <td contenteditable="true">voleibol</td>
                
            </tr>
            <tr>
                <td contenteditable="true">industria</td>
                <td contenteditable="true">mecanica</td>
                <td contenteditable="true">atletismo</td>
                
            </tr>
            <tr>
                <td contenteditable="true">ADSO noche</td>
                <td contenteditable="true">cadetera</td>
                <td contenteditable="true">tenis de mesa </td>
                
            </tr>
            <tr>
                <td contenteditable="true">ADSO mañana</td>
                <td contenteditable="true">ADSO tarde</td>
                <td contenteditable="true">Futbol</td>
                
            </tr>
            <tr>
                <td contenteditable="true">cafetera</td>
                <td contenteditable="true">comercio</td>
                <td contenteditable="true">baloncesto</td>
                
            </tr>
            <tr>
                <td> <button><a href="{{ route('primer.show', 0) }}">agregar</a></button> </td>
            </tr>
        </table>
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

        .container {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }
        
        table {
            width: 80%;
            border-collapse: collapse;
            background-color: white;
        }

        th, td {
            /* border: 1px solid black; */
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #007bff;
            color: white;
        }
        .container table button {
            background-color: #2910e7;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s, transform 0.2s;
        }

        .container table button a {
            text-decoration: none;
            color: white;
            font-weight: bold;
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
        }

        nav button {
            background-color: #007bff;
            color: white;
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
            background-color: #004494;
        }

        .buttons a {
            display: inline-block;
            background-color: #007bff;
            color: white;
            padding: 12px 20px;
            margin: 10px;
            text-decoration: none;
            border-radius: 5px;
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
