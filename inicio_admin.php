<?php
session_start();
include 'php/conexion.php';
include 'php/consulta.php';
$user=$_SESSION['usuario'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo/style.css">
    <link rel="stylesheet" href="estilo/style2.css">
    <title>Document</title>
</head>
<body>
<div class="gridtop">
<img src="img/logo.png" alt="">
<h1>Sistema de correspondencia</h1>

<br>
<h3>Delegacion coahuila <br>
        Subdelegacion de prestaciones   <br>
        Departamento de pensiones <br>
        </h3>
        
</div>
<h3 class="usuario">Bienvenido (a): <?php echo  $campo['nombre']  ?></h3>
<div class="grid-container">
    
    <div class="grid-item"> <a href="forms/internas.php" class="index" >Registrar correspondencia</a></div>
    <div class="grid-item"><a href="oficios.php" class="index">Elaborar Oficio</a></div>
    <div class="grid-item"><a href="datos.php" class="index">Revisar reportes</a></div>
    <div class="grid-item"><a href="responder.php" class="index">Responder</a></div>
    <div class="grid-item"><a href="enviar.php" class="index">Enviar correspondencia</a></div>
    <div class="grid-item"><a href="php/cerrar.php" class="index" style="background-color:#F0D3D3; color:#F56262 ; border:2px solid #F56262 ">Cerrar Sesión</a></div>

    </div>

</body>
</html>