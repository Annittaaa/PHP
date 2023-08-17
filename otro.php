<?php
/*
 * Creamos 3 variables en PHP y luego lo mostramos en el html*/
$nombre='Ana Romero';
$fecha=date("d/m/Y");
$hora=date("H:i:s");
$precio=5;
$cantidad=10;
$_edad=15;
$EdaD=20;
define('MINOMBRE',"Ana Romero");
const OTRONOMBRE="Laura Rodriguez";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Otro php</title>
</head>
<body>
    <p>¡Hola <?=$nombre;?>!</p>
    <p>Hoy es: <?=$fecha;?></p>
    <p>Son las: <?=$hora;?></p>
    <p>El precio total: <?=$precio*$cantidad;?> €</p>
    <p>
        <?php
    echo "Mi nombre es ",MINOMBRE,"<br/>","<br/>","El otro nombre es ", OTRONOMBRE;
    ?>
    </p>
</body>
</html>