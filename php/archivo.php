<?php

include 'conexion.php';
$id=$_GET['id'];
$sql="SELECT * from correspondencia WHERE folio='$id'";
$registro=mysqli_query($cnx,$sql);
$campo=mysqli_fetch_array($registro);



$sql="SELECT * from respuesta WHERE folio='$id'";
$registro=mysqli_query($cnx,$sql);
$respuesta=mysqli_fetch_array($registro);



#if($campo['archivo']==empty){
    

#echo ' El archivo no esta respondido ';

#}

#header('content-type: application/pdf');
#readfile('../forms/pdfs/'.$campo['archivo']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Archivos</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilo/style.css">
    </head>

<style type="text/css">
  

table td :hover{
  background-color: transparent !important;
}
table :hover{
  background-color: transparent !important;
}

</style>

    <body>
    <div class="gridtop">
<img src="../img/logo.png" alt="">
<h1>Archivos</h1>



<br>
<h3>Delegación coahuila <br>
        Subdelegación de prestaciones   <br>
        Departamento de pensiones <br>
        </h3>


</div>
<br>
<div class="inlinee"> 
<a href="../datos.php" 
 >regresar</a>
</div>
<style>

color-text: black:
</style>

<h1  style="    background-color: rgba(126, 243, 233, 0.493);; width: 400px; margin: auto;"><?php echo $campo['folio']?></h1>
<br><br>


<table align="center" width="70%" style="background-color:white; table-layout: fixed;" cellpadding="10px"  >
  
<tr>
  <td style="width:30%">Fecha Respuesta</td>
  <td ><?php echo $respuesta['fechaRespuesta'] ?></td>

</tr>

<tr>
  <td>Respondió</td>
  <td><?php echo $respuesta['nombreRespuesta'] ?></td>
</tr>
<tr>
  <td>Descripcion</td>
  <td><?php echo $respuesta['descripcion'] ?></td>

</tr>

</table>




<br><br>




<table align="center" width="100%"  style="table-layout: fixed; ; border:5px solid transparent;" >
  <tr  >
    <td width="50%"  style="margin:0px; padding:0px; height:5px !important;border:5px solid transparent; background-color: white;"><h3>Oficio Registrado</h3></td>
    <td width="50%"  style="margin:0px; padding:0px; height:5px !important;border:5px solid transparent; background-color: white;"><h3>Oficio Respuesta</h3></td>


  </tr>
  <tr>
    

    <td style="height: 1000px !important;">

<?php 
if (empty($campo['archivo'])) {

?>
<h3>Este oficio no contiene Pdf </h3>
<?php
}else{
?>
<iframe src="../forms/pdfs/<?php echo $campo['archivo']; ?>" width="780" height="1000"></iframe>

<?php
}
?>
      

    </td>
    <td style="height: 1000px !important;">
<?php 
if (empty($respuesta['archivoRespuesta'])) {

?>
<h3>Este oficio no contiene Pdf </h3>
<?php
}else{
?>
   <iframe src="../forms/archivosRespuestas/<?php echo $respuesta['archivoRespuesta']; ?>" width="780" height="1000"></iframe>

<?php
}
?>


</td>
  </tr>


</table>




  
  
</body>
</html>