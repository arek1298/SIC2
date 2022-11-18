<?php  
session_start();
include 'php/conexion.php';
include 'php/consulta.php';
include 'noSesion.php';

$_SESSION['id']="";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo/style.css">
    <title>Document</title>
</head>

<body>

<div class="gridtop">
<img src="img/logo.png" alt="">
<h1>Reportes</h1>

<h3>Delegacion coahuila <br>
        Subdelegacion de prestaciones   <br>
        Departamento de pensiones</h3>
</div>

<div class="inline"> 
<a href="inicio.php" >regresar</a>
</div>
<a href="datos.php" style="margin-right:3em; margin-top: -3em;">Correspondencia</a>

<div class="form">

<form class="form-inline" method="POST" action="">
 
      <input type="text" class="form-control" placeholder="busqueda"   name="buscar"/>
        <button class="button" name="search">Buscar</button> 
       
    </form>




</div>



<div ALIGN="CENTER" class="table" style="background-color:transparent;">
<table style="empty-cells:hide;" id="datos">
						<tr class="head">
                             <td>Tipo de Oficio</td>
                             <td>Fecha de Elaboración</td>
                             <td>Folio</td>
                            <td >Descripcion</td>
                             <td>Nombre</td>
						</tr>
					
					<tbody>

<?php  include 'php/buscarOficioElaborado.php';?>


                    </tbody>		
					
					</table>

<h1></h1>
</div>

    </div>
    
</body>
</html>