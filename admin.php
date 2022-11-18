<?php 
session_start();
include 'php/conexion.php';
include 'php/consulta.php';
include 'php/registroUsuario.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo/style.css">
    <title>Admin</title>
</head>
<body>
<div class="gridtop">
<img src="img/logo.png" alt="">
<h1> Administración</h1>

<h3>Delegación coahuila <br>
Subdelegación de prestaciones</h3>
</div>
<div class="grid">

<div class="int">
<br><br>
<a href="registro_us/index.php">Usuarios</a><br>
<a href="inicio.php">Inicio</a><br>

<a href="cargos/index.php">Licenciados</a><br>

<a href="editarDestinos.php">Editar destinos</a><br>
<a href="editarCorrespondencia.php">Editar Correspondencia</a><br>
<a href="descarga.php" style="background-color:#FCCF5D ">Respaldo de base de datos</a><br>

<a href="php/cerrar.php" style="background-color: #FA7659">Cerrar Sesión</a><br><br><br>

<br><br>

</div>


<div class="form">

<h1>Regístrar usuarios</h1>
<form  method="post">
            <input  type="text" name="nombre" placeholder="Nombre Completo" >
            <input  type="text" name="usuario" placeholder="Primer nombre y primer apellido" >
            <input type="text" name="cargo"placeholder="Cargo">
            <input  type="text" name="rfc" placeholder="RFC" >
            <input  type="text" name="contrasena" placeholder="Contraseña" >
            <input  type="text" name="contrasena2" placeholder="Confirmar contraseña"  >
            <select name="permisos" id="" >
                <option selected disabled>Permisos</option>
                <option value="1" class="option" >-Control total</option>
                <option value="2" class="option">-Solo Registros</option>
                <option value="2" class="option">-Solo   Consultas</option>
            </select>
        
            <button class="guardar">Registrar Usuario</button>
            <style>
          .guardar{
              background-color: green;

          }
            </style>
        </form>

</div>

    </div>
    

</body>
</html>

