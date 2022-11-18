<?php
session_start();
include 'php/conexion.php';
include 'php/agregar.php';

$caracteres_permitidos = '012345689ABCDEF';
   $longitud = 4;
   $clave= substr(str_shuffle($caracteres_permitidos), 0, $longitud);
    
    

if (isset($_POST['guardar'])) {


$id1=$_POST['id1'];
$nombre1=$_POST['nombre1'];
$cargo1=$_POST['cargo1'];
$direccion1=$_POST['direccion1'];
$ciudad1=$_POST['ciudad1'];

    $sSQL="Update destinos Set nombre='$nombre1', cargo='$cargo1',ciudad='$ciudad1',direccion='$direccion1' Where id='$id1'";
$registro1=mysqli_query($cnx,$sSQL);
}


if (isset($_POST['registrar'])) {


$nombre1=$_POST['nombre1'];
$cargo1=$_POST['cargo1'];
$direccion1=$_POST['direccion1'];
$ciudad1=$_POST['ciudad1'];

mysqli_query($cnx,"INSERT INTO destinos values
(
'',
'$nombre1',
'$cargo1',
'$ciudad1',
'$direccion1'
)");
}


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

<body >

<div class="inline"> 

</div>
<div class="gridtop">
<img src="img/logo.png" alt="">
<h1>Editar Destinos</h1>

<br>
<h3>Delegacion coahuila <br>
        Subdelegacion de prestaciones   <br>
        Departamento de pensiones <br>
        </h3>

        
        </div>


<br>
<div class="gridGenerar2" >
<div class="respuesta" >
<br>


<table align="center">
    
<tr>
    
<td style="background-color:#CBCBCB" >Nombre</td>

<td style="background-color:#CBCBCB">Cargo</td>

<td style="background-color:#CBCBCB">Ciudad </td>

<td style="background-color:#CBCBCB">Dirección</td>


</tr>
<?php 

$sql="SELECT * FROM destinos ";
$registro=mysqli_query($cnx,$sql);
while ($campo=mysqli_fetch_array($registro)) {
    
?>

<tr>
    
<td style="background-color:white;"><?php  echo $campo['nombre']?></td>
<td style="background-color:white;"><?php  echo $campo['cargo']?></td>
<td style="background-color:white;"><?php  echo $campo['ciudad']?></td>
<td style="background-color:white;"><?php  echo $campo['direccion']?></td>
<td style="background-color:white;"><form method="post">
    
<input type="hidden" name="id" value="<?php echo $campo['id'] ?>">
<input type="hidden" name="nombre" value="<?php echo $campo['nombre'] ?>">
<input type="hidden" name="cargo" value="<?php echo $campo['cargo'] ?>">
<input type="hidden" name="ciudad" value="<?php echo $campo['ciudad'] ?>">
<input type="hidden" name="direccion" value="<?php echo $campo['direccion'] ?>">

<button type="submit" style="width:32px;height: 32px; background-image:url(img/editar.png); background-repeat:no-repeat; background-color:transparent;" name="editar" ></button>

</form></td>
</tr>



<?php }?>
</table>
 

<br><br>

</div>

<div class="grida22" align="center" >

<h1>Editar destino</h1>
<form method="post">
<input type="hidden" name="id1" placeholder="Ingresa el Nombre"  value="<?php if(isset($_POST['editar'])){ echo $_POST['id'];  } ?>">
<input type="text" name="nombre1" placeholder="Ingresa el Nombre"  value="<?php if(isset($_POST['editar'])){ echo $_POST['nombre'];  } ?>">
 <input type="text" name="cargo1" placeholder="Ingresa el Cargo" value="<?php if(isset($_POST['editar'])){ echo $_POST['cargo'];  } ?>">
 <input type="text" name="ciudad1" placeholder="Ingresa el Ciudad" value="<?php if(isset($_POST['editar'])){ echo $_POST['ciudad'];  } ?>">
  <input type="text" name="direccion1" placeholder="Ingresa el Direccion" value="<?php if(isset($_POST['editar'])){ echo $_POST['direccion'];  } ?>">


   <button type="submit" name="guardar">Guardar</button>
   
</form>

<a href="admin.php">Regresar</a>
</div>
</div>
    

</body>

</html>  