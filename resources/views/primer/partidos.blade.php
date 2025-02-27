<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Eventos Deportivos</title>
    <link rel="stylesheet" href="css/estilos.css">
    <style>
        body {
                background: url(https://cdn.pixabay.com/photo/2018/06/12/20/17/soccer-3471402_1280.jpg);
                background-size:  100vw 100vh ;
        }
    </style>
</head>

<body>

    <header>
        <h1>partidos</h1>
    </header>

    <nav>
        <button><a href="{{ route('primer.index') }}">Equipos</a></button>
        <button><a href="{{ route('primer.create') }}">Partidos</a></button>
        {{-- <button><a href="{{ route('primer.show',0) }}">Resultados</a></button> --}}
        <button><a href="{{ route('primer.edit',0) }}">Notificaciones</a></button>
        <button><a href="{{ route('segundo.show',0) }}">bolver al home</a></button>
    </nav>

    <div class="container">
        <table>
            <tr>
                <th>Equipo 1</th>
                <th>Equipo 2</th>
                <th>deporte</th>
                <th>Fecha</th>
                <th>Hora</th>
                <th>Resultado</th>
            </tr>
            <tr>
                <td contenteditable="true">ADSO tarde</td>
                <td contenteditable="true">cafetera</td>
                <td contenteditable="true">futbol</td>
                <td contenteditable="true">22/03/2000</td>
                <td contenteditable="true">3:30 pm</td>
                <td contenteditable="true">empate</td>
            </tr>
            <tr>
                <td contenteditable="true">reposteria</td>
                <td contenteditable="true">mecanica</td>
                <td contenteditable="true">baloncesto</td>
                <td contenteditable="true">10/03/2000</td>
                <td contenteditable="true">2:00pm</td>
                <td contenteditable="true">mecanica=WIN</td>
            </tr>
            <tr>
                <td contenteditable="true">ADSO noche</td>
                <td contenteditable="true">industria</td>
                <td contenteditable="true">voleivol</td>
                <td contenteditable="true">15/03/2000</td>
                <td contenteditable="true">8:00Am</td>
                <td contenteditable="true">industria=WIN</td>
            </tr>
            <tr>
                <td contenteditable="true">Proximos</td>
                <td contenteditable="true">Proximos</td>
                <td contenteditable="true">Proximos</td>
                <td contenteditable="true">Proximos</td>
                <td contenteditable="true">Proximos</td>
                <td contenteditable="true">Proximos</td>
            </tr>
            <tr>
                <td> <button><a href="{{ route('primer.show', 0) }}">Modificar</a></button> </td>
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
