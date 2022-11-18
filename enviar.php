<?php
session_start();
include 'php/conexion.php';
echo $_SESSION['usuario'];

unset($_SESSION['carrito']);

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
    <link rel="stylesheet" href="estilo/style2.css">
    <script src="js/jquery.js "></script>
    <script src="js/cargar.js "></script>
    <title>Document</title>
</head>
<body>
<div class="inline"> 
<a href="inicio.php" class="g"><img class="img12" src="img/undo.png" style="background-color: transparent"></a><br>
</div>
<div class="gridtop">
<img src="img/logo.png" alt="">
<h1>Enviar correspondencia</h1>

<br>
<h3>Delegacion coahuila <br>
        Subdelegacion de prestaciones   <br>
        Departamento de pensiones <br>
        </h3>

        
        </div>


<br><br><br>
<div class="respuesta">
<br>
<h2></h2>

<a href="generar.php?clave=<?php echo $clave ?>" style="width:30em; height:4em;" target="_blank"><h2 style="margin-top:10px">Generar un nuevo archivo</h2></a>
<br><br>

<a href="relacion.php" style="width:30em; height:4em;" target="_blank"><h2 style="margin-top:10px">Relacion de correspondencia</h2></a>
<br><br>


<br><br>

  IIIIIIIIIIIIIIIII
 IIIIIIIIIIIIIIIIIII
IIIIIIIIIIIIIIIIIIIII
IIIIIII          IIII  
IIIIIII          IIII
IIIIIII
IIIIIII
IIIIIII
IIIIIII
IIIIIII
IIIIIII
IIIIIII
IIIIIII          IIII
IIIIIII          IIII
IIIIIIIIIIIIIIIIIIIII
 IIIIIIIIIIIIIIIIIII
  IIIIIIIIIIIIIIIII

                                

</div>



</body>

</html>