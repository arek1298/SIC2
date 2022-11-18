<?php
include 'php/conexion.php';
include 'php/respuesta.php'; 

echo $_SESSION['usuario'];
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
<div class="gridtop">
<img src="img/logo.png" alt="">
<h1>Respuestas</h1>

<br>
<h3>Delegacion coahuila <br>
        Subdelegacion de prestaciones   <br>
        Departamento de pensiones <br>
        </h3>

        
        </div>

<div style="  width: 200px; margin-left:40" align="left" m >
<form method="post" action="php/noRespuesta.php">
<input type="hidden" name="folioo" value="<?php  echo $folio?> ">
<button type="submit" style="align-content: left;">Regresar</button></form>
</div>
<div class="respuesta">

<h2><?php echo $folio ?></h2>

<form  method="post" enctype="multipart/form-data"  >

 <textarea  id="" cols="30" rows="10"   placeholder="Agrega una respuesta"  name="descripcion" maxlength="500" class="textarea"></textarea>

 <h3>Añade un archivo a la respuesta </h3>

 <input type="file" name="file">

<button name="guardar" type="submit">Guardar Respuesta </button>

 
</form>

</div>



</body>

</html>