<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color:<?php echo $_GET["color"]; ?>;
            text-align:center;
            color:<?php echo $_GET["colorletra"]; ?>;
        }
    </style>
</head>
<body>
    <h1>Datos recibidos</h1>

    Bienvenido <?php echo $_GET["nombre"]; ?><br>
    Tu password es: <?php echo $_GET["pass"]; ?>

</body>
</html>