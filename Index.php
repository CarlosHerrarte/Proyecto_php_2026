<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Página combinada HTML, PHP e Imagen</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 50px;
            background-color: #f0f0f0;
        }
        .mensaje-php {
            background-color: #272822;
            color: #f8f8f2;
            padding: 20px;
            margin: 20px auto;
            width: 50%;
            border-radius: 10px;
            font-family: "Courier New", monospace;
        }
        .contenido-html {
            margin-top: 20px;
        }
        img {
            margin-top: 30px;
            max-width: 300px; /* Ajusta el tamaño de la imagen */
            border-radius: 10px;
        }
    </style>
</head>
<body>

    <h1>Incluyendo HTML y PHP con Imagen</h1>

    <!-- Código PHP -->
    <div class="mensaje-php">
        <?php
        echo "Hola Mundo, Soy Carlos Herrarte";
        ?>
    </div>

    <!-- Contenido del archivo HTML incluido -->
    <div class="contenido-html">
        <?php include 'Hola_Mundo.html'; ?>
    </div>

    <!-- Imagen local -->
    <div class="imagen-local">
        <img src="image.jpg" alt="Mi Imagen">
    </div>

</body>
</html>