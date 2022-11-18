<?php  
session_start();

include 'php/conexion.php'

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
<div class="inline"> 

</div>
<div class="gridtop">
<img src="img/logo.png" alt="">
<h1>Reportes</h1>
<h3>Delegacion coahuila <br>
        Subdelegacion de prestaciones   <br>
        Departamento de pensiones</h3>
</div>


<br><br><br><br>


<div ALIGN="CENTER" class="table2" >
<table>
						<tr class="head">
                             <td>Clave del archivo</td>
                             <td>Oficios</td>
                             <td></td>
                             
                             
                           
						</tr>
					
					<tbody>

<?php  include 'php/crearRelacion.php'?>

                    </tbody>		
					
					</table>
<br>
    

<h1></h1>
</div>

<a href="pdf2.php" ALIGN="CENTER"> Generar PDF</a>
    </div>

    <br><br><br><br>

    <br><br><br><br>

    <br><br><br><br>
    
</body>
</html>