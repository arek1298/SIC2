<?php  
session_start();
include 'php/conexion.php';
include 'php/consulta.php';
include 'noSesion.php';
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


<table align="center" style="border:5px solid transparent; pointer-events:stroke  ; background-color: rgba(218, 218, 218, 0.600); border-radius: 10px;"   >
    
<tr>
    <td style="border:5px solid transparent; background-color: rgba(218, 218, 218, 1);">Tipo de correspondencia</td>
    <td style="border:5px solid transparent; background-color: rgba(218, 218, 218, 1);">Tema</td>
    <td style="border:5px solid transparent; background-color: rgba(218, 218, 218, 1);">Asignados</td>
  

</tr>
<tr>
    <td style="border:5px solid transparent; "><form method="post">
        
<button type="submit" name="interna" style="color: black; background-color:white;width: 5em;height: 2em;margin-top: 10px ;">Interna</button>

<button type="submit" name="externa" style="color: black; background-color:white;width: 5em;height: 2em;margin-top: 10px ;">Externa</button>
    </form>
</td>
    <td style="border:5px solid transparent;"><form method="post">
        
<button type="submit" name="servicio" style="color: black; background-color:white;width: 11em;height: 2.1em;margin-top: 10px ;" >Servicios</button>

<button type="submit" name="seguridad" style="color: black; background-color:white;width: 11em;height: 2.1em;margin-top: 10px ;">Seguridad e Higiene</button>
<button type="submit" name="cumplimiento" style="color: black; background-color:white;width: 11em;height: 2.1em;margin-top: 10px ;">Cumplimiento de Sentencia</button>

<button type="submit" name="medicina" style="color: black; background-color:white;width: 11em;height: 2.1em;margin-top: 10px ;">Medicina del Trabajo</button>
    </form></td>
    <td style="border:5px solid transparent;"><form method="post">
        
<button type="submit" name="asignados" style="color: black; background-color:white;width: 6em;height: 2em;margin-top: 10px ;">Asignados </button>


    </form></td>
  
</tr>

<tr>
    <td colspan="3">
        <div class="form">

<form class="form-inline" method="POST" action="">
 
      <input type="text" class="form-control" placeholder="busqueda"   name="buscar" style="height: 30px;" />
        <button class="button" name="search" style="height:30px">Buscar</button> 
       
    </form>




</div>
    </td>
</tr>
</table>



<div ALIGN="CENTER" class="table"  >
<table style="empty-cells:hide;" id="datos"  >
						<tr class="head">
                             <td>Tipo de Correspondencia</td>
                             <td>Area</td>
                             <td>No. de Oficio</td>
                             <td>Departamento o Area que los solicita</td>
                            <td>Nombre de quien lo solicita</td>
                            <td >Tema</td>
                            <td >Se asignó</td>
                            <td >Fecha de Recepción</td>
                          <td>Consulta</td>
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