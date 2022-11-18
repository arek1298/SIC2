<?php  
include 'php/conexion.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../estilo/style.css">
    <title>Document</title>
</head>
<body>
<div class="inline"> 
<a href="inicio.php" >regresar</a>
</div>
<div class="gridtop">
<img src="img/logo.png" alt="">
<h1>Archivos</h1>
<h3>Delegación coahuila <br>
        Subdelegación de prestaciones   <br>
        Departamento de pensiones</h3>
</div>


<div class="form">

<form class="form-inline" method="POST" action="">
 
      <input type="text" class="form-control" placeholder="busqueda"   name="buscar"/>
        <button class="button" name="search">Buscar</button> 
      
    </form>

</div>



<div ALIGN="CENTER" class="table">
<table>
						<tr class="head">
                             <td>Fecha</td>
                             <td>Correspondencia</td>
                             <td>Servicio</td>
                             <td>Folio</td>
                             <td>Fecha del Oficio </td>
                             <td>Solicitó</td>
                            <td>Departamento o Dependencia</td>
                            <td>Tema</td>
                           
						</tr>
					
					<tbody>

<?php  include 'php/buscarReporte.php'?>

                    </tbody>		
					
					</table>

<h1></h1>
</div>

    </div>
    
</body>
</html>
