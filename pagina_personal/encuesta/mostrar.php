<!DOCTYPE html>
<html lang="en">
<head>
    <title>Resultado</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        .header{
            background-color: rgb(100, 198, 236);
            padding: 30px;
        }
    </style>
</head>
</html>


<body>
    <h2 class="header">Respuestas enviadas</h2><br><br>
<?php
    $respuesta1 = $_POST["respuesta1"];
    echo "La respuesta de la pregunta 1 es: " .$respuesta1;

    $respuesta2 = $_POST["respuesta2"];
    echo "La respuesta de la pregunta 2 es: " .$respuesta2;

    $respuesta3 = $_POST["respuesta3"];
    echo "La respuesta de la pregunta 3 es: " .$respuesta3;

    $respuesta4 = $_POST["respuesta4"];
    echo "La respuesta de la pregunta 4 es: " .$respuesta2;

    $respuesta5 = $_POST["respuesta5"];
    echo "La respuesta de la pregunta 5 es: " .$respuesta5;

    $respuesta6 = $_POST["respuesta6"];
    echo "La respuesta de la pregunta 6 es: " .$respuesta6;

    $respuesta7 = $_POST["respuesta7"];
    echo "La respuesta de la pregunta 7 es: " .$respuesta7;

    $respuesta8 = $_POST["respuesta8"];
    echo "La respuesta de la pregunta 8 es: " .$respuesta8;
?>

<br><br>
</body>
