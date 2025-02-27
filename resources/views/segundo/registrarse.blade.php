<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Contacto</title>
    <link rel="stylesheet" href="styles.css">
    <style>
         body {
                background: url(https://cdn.pixabay.com/photo/2013/02/09/04/23/swimmers-79592_1280.jpg);
                background-size:  100vw 100vh ;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Formulario de inscripción</h2>
        <form>
            <label for="deporte">Deporte:</label>
            <select name="deporte" id="deporte" required>
                <option value="0">Selecciona un deporte</option>
                <option value="1">Baloncesto</option>
                <option value="2">Fútbol</option> 
                <option value="3">Voleibol</option>
                <option value="4">Natación</option>
                <option value="5">Quemados</option>
            </select>
            <br>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" placeholder="Introduce tu nombre" required>
            <br>
            <label for="curso">Curso:</label>
            <input type="text" id="curso" name="curso" placeholder="Introduce curso" required>
            <br>
            <label for="edad">Edad:</label>
            <input type="number" id="edad" name="edad" placeholder="Introduce tu edad" required>
            <br>
            <label for="telefono">Teléfono:</label>
            <input type="number" id="telefono" name="telefono" placeholder="Introduce tu teléfono" required>
            
            <button type="submit">Enviar</button>
            <button class="boton"><a href="{{ route('segundo.show',0) }}">bolver al home</a></button>
        </form>
    </div>
</body>
</html>

<style>

    body {
        font-family: Arial, sans-serif;
        background-color: rgba(80, 132, 188, 0.8);
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }
    .container {
        background-color: rgba(106, 159, 214, 0.8);
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        width: 350px;
        text-align: center;
    }
    h2 {
        margin-bottom: 20px;
    }
    label {
        display: block;
        text-align: left;
        font-weight: bold;
        margin-top: 10px;
    }
    input, textarea, select {
        width: 100%;
        padding: 10px;
        margin-top: 5px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
    }
    .boton{
        width: 100%;
        background-color: #007bff;
        color: white;
        padding: 10px;
        margin-top: 20px;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
    }
    button {
        width: 100%;
        background-color: #007bff;
        color: white;
        padding: 10px;
        margin-top: 20px;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
    }
    button:hover {
        background-color: #0056b3;
    }
    
</style>
