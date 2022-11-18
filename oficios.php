<?php
session_start();
unset($_SESSION['carrito']);

include 'php/conexion.php';
#echo $_SESSION['usuario'];

   $caracteres_permitidos = '012345689ABCDEF';
   $longitud = 4;
   $clave= substr(str_shuffle($caracteres_permitidos), 0, $longitud);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo/style.css">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
    />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="estilo/style2.css">
    <script src="js/jquery.js "></script>
    <script src="js/cargar.js "></script>
    <title>Document</title>
</head>
<body>

<div class="gridtop">
<img src="img/logo.png" alt="">
<h1>Elaborar Oficios</h1>

<br>
<h6 class="h6">Delegacion coahuila <br>
        Subdelegacion de prestaciones   <br>
        Departamento de pensiones <br>
        </h6>
        <style>
           .gridtop h6{
    color: white;
    text-align: right;
    margin-top: -50px;
    margin-right: 10px;
</style>
</div>
<div></div>


<div class="incline" style="top: 10em;">
   <a class="btn btn-lig" href="inicio.php" role="button" style="width: 100px; height: 90px; color: black; background-color: white; "><i class="fas fa-chevron-circle-left fa-5x"></i></a>






</div>
</div>

<div class="grid-container" style="width 100px;">
 

    <div class="grid-item">
<a href="servicios.php" class="btn btn-lg btn-default" style="width: 380px; font-size: 30px;height: 165px; color: black; border-color: black; background-color: white;"> Servicios<br><i class="fa fa-users fa-2x" aria-hidden="true"></i></a></div>
<div class="grid-item">
<a href="oficioSeguridad.php" class="btn btn-lg btn-default" style="width: 380px; font-size: 30px;height: 165px; color: black; background-color: white;">Seguridad <br> E Higiene<br><i class="fa fa-lock fa-2x" aria-hidden="true"></i></a></div>
<div class="grid-item">

<a href="oficioSentencias.php" class="btn btn-lg btn-default" style="width: 380px; font-size: 30px;height: 165px; position: left; color: black; background-color: white;">Cumplimiento de<br>Sentencias<br><i class="fa fa-briefcase fa-2x" aria-hidden="true"></i></a></div>
<div class="grid-item">





