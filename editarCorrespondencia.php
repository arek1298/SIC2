<?php
session_start();
include 'php/conexion.php';
include 'php/agregar.php';

$caracteres_permitidos = '012345689ABCDEF';
   $longitud = 4;
   $clave= substr(str_shuffle($caracteres_permitidos), 0, $longitud);
    
    

if (isset($_POST['guardar'])) {


$id=$_POST['id1'];
$folio=$_POST['folio1'];
$servicio=$_POST['servicio1'];
$fecha=$_POST['fechaOficio1'];
$dep=$_POST['dep1'];
$solicita=$_POST['solicita1'];
$tema=$_POST['tema1'];
$asigno=$_POST['asigno1'];

    $sSQL="Update correspondencia Set folio='$folio', servicio='$servicio',fechaOficio='$fecha',solicita='$solicita',dep='$dep',tema='$tema' ,asigno='$asigno' Where id='$id'";
$registro1=mysqli_query($cnx,$sSQL);
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
<div class="gridGenerar2" style="grid-template-columns: 65em 30em;">
<div class="respuesta" >
<br>


<table align="center">
    
<tr>
    
<td style="background-color:#CBCBCB" >Folio</td>

<td style="background-color:#CBCBCB">Servicio</td>

<td style="background-color:#CBCBCB">Fecha Oficio</td>

<td style="background-color:#CBCBCB" >Solicita</td>

<td style="background-color:#CBCBCB">Deparamento</td>

<td style="background-color:#CBCBCB">Tema</td>

<td style="background-color:#CBCBCB">Se Asigno</td>



</tr>
<?php 

$sql="SELECT * FROM correspondencia ";
$registro=mysqli_query($cnx,$sql);
while ($campo=mysqli_fetch_array($registro)) {
    
?>

<tr>
    
<td style="background-color:white;"><?php  echo $campo['folio']?></td>
<td style="background-color:white;"><?php  echo $campo['servicio']?></td>
<td style="background-color:white;"><?php  echo $campo['fechaOficio']?></td>
<td style="background-color:white;"><?php  echo $campo['solicita']?></td>
<td style="background-color:white;"><?php  echo $campo['dep']?></td>
<td style="background-color:white;"><?php  echo $campo['tema']?></td>
<td style="background-color:white;"><?php  echo $campo['asigno']?></td>



<td style="background-color:white;"><form method="post">
    
<input type="hidden" name="id" value="<?php echo $campo['id'] ?>">
<input type="hidden" name="folio" value="<?php echo $campo['folio'] ?>">
<input type="hidden" name="servicio" value="<?php echo $campo['servicio'] ?>">
<input type="hidden" name="fechaOficio" value="<?php echo $campo['fechaOficio'] ?>">
<input type="hidden" name="solicita" value="<?php echo $campo['solicita'] ?>">
<input type="hidden" name="dep" value="<?php echo $campo['dep'] ?>">
<input type="hidden" name="tema" value="<?php echo $campo['tema'] ?>">
<input type="hidden" name="asigno" value="<?php echo $campo['asigno'] ?>">



<button type="submit" style="width:32px;height: 32px; background-image:url(img/editar.png); background-repeat:no-repeat; background-color:transparent;" name="editar" ></button>

</form></td>
</tr>



<?php }?>
</table>
 

<br><br>

</div>

<div class="grida22" align="center" >

<h1>Editar Correspondencia</h1>
<form method="post">
<input type="hidden" name="id1" placeholder="Folio"  value="<?php if(isset($_POST['editar'])){ echo $_POST['id'];  } ?>">

 <input type="text" name="folio1" placeholder="Folio" value="<?php if(isset($_POST['editar'])){ echo $_POST['folio'];  } ?>">

<input type="text" name="servicio1" placeholder="Servicio"  value="<?php if(isset($_POST['editar'])){ echo $_POST['servicio'];  } ?>">

 <input type="text" name="fechaOficio1" placeholder="Fecha del oficio" value="<?php if(isset($_POST['editar'])){ echo $_POST['fechaOficio'];  } ?>">

 <input type="text" name="solicita1" placeholder="Solicita" value="<?php if(isset($_POST['editar'])){ echo $_POST['solicita'];  } ?>">

  <input type="text" name="dep1" placeholder="Departamento" value="<?php if(isset($_POST['editar'])){ echo $_POST['dep'];  } ?>">

   <input type="text" name="tema1" placeholder="Tema" value="<?php if(isset($_POST['editar'])){ echo $_POST['tema'];  } ?>">
 <input type="text" name="asigno1" placeholder="Se Asigno" value="<?php if(isset($_POST['editar'])){ echo $_POST['asigno'];  } ?>">
 


   <button type="submit" name="guardar">Guardar</button>
   
</form>

<a href="admin.php">Regresar</a>
</div>
</div>
    

</body>

</html>  