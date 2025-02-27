<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Eventos Deportivos</title>
    <link rel="stylesheet" href="css/estilos.css">
    <style>
        body {

            background: url(https://media.istockphoto.com/id/629496672/photo/wall-covered-with-adhesive-note-papers.jpg?s=2048x2048&w=is&k=20&c=uN-TEMNvUSsf9eEvj-jSFSuozOEwMLtz1BdpI1iH2i0=);
            background-size: 100vw 100vh;
        }
    </style>
</head>

<body>

    <header>
        <h1>Notificaciones</h1>
    </header>

    <nav>
        <button><a href="{{ route('primer.index') }}">Equipos</a></button>
        <button><a href="{{ route('primer.create') }}">Partidos</a></button>
        {{-- <button><a href="{{ route('primer.show',0) }}">Resultados</a></button> --}}
        <button><a href="{{ route('primer.edit', 0) }}">Notificaciones</a></button>
        <button><a href="{{ route('segundo.show', 0) }}">Volver al home</a></button>
    </nav>

    <div class="container">
        <table>
            <tr>
                <th>Notificaciones</th>


            </tr>
            <tr>
                <td contenteditable="true">Gracias por asistir a las olimpiadas universitarias edicion 2000 </td>
                <br>
            </tr>
            <tr>
                <td contenteditable="true">el partido ADSO vs cafetera termino en empate</td>
            </tr>
            <tr>
                <td contenteditable="true">el partido reposteria vs mecanica tremino con la bictoria sobre mecanica</td>

            </tr>
            <tr>
                <td contenteditable="true">ADSO noche vs industria en voleibol se termino llebando la victoria industria
                </td>

            </tr>
            <tr>
                <td contenteditable="true">LOS PARTIDOS SE SUPENDEN HASTA RPEVIO AVISO POR MULTIPLES LECIONES</td>
            </tr>
            <tr>
                <td> <button><a href="{{ route('primer.show', 0) }}">agregar</a></button> </td>
            </tr>





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
            border-collapse: collapse;
            background-color: white;
            table-layout: auto;

            max-width: 100%;

        }

        th,
        td {
            padding: 8px;
            border: 1px solid black;
            text-align: center;
            white-space: nowrap;

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
            backdrop-filter: blur(5px);
        }

        nav button {
            background-color: rgba(0, 123, 255, 0.9);
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
            text-decoration: none;
            font-size: 18px;
        }

        nav button:hover {
            background-color: rgba(0, 68, 148, 0.9);
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
