<?php  
session_start();
include 'php/conexion.php';
include 'php/consulta.php';
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

<div class="form">

<form class="form-inline" method="POST" action="">
 
      <input type="text" class="form-control" placeholder="busqueda"   name="buscar"/>
        <button class="button" name="search">Buscar</button> 
       
    </form>

</div>



<div ALIGN="CENTER" class="table">
<table style="empty-cells:hide;">
						<tr class="head">
                             <td>Tipo de Correspondencia</td>
                             <td>Area</td>
                             <td>No. de Oficio</td>
                             <td>Departamento o Area que los solicita</td>
                            <td>Nombre de quien lo solicita</td>
                            <td >Tema</td>
                            <td >Se asignó</td>
                            <td >Fecha de Recepción</td>
                           <td >Fecha de Elaboración</td>
                          <td>Trabajado</td>
						</tr>
					
					<tbody>

<?php  include 'php/buscarReporte.php';?>


                    </tbody>		
					
					</table>

<h1></h1>
</div>

    </div>
    
</body>
</html>