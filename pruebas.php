<?php 


if (isset($_POST['subir'])) {


$diassemana = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
 



$fecha=$_POST['fecha'];
$date= explode("-", $fecha);
$dia=intval($date[2]);
$mes=intval($date[1]);
$dates= $dia." de ".$meses[$mes-1]. " del ".$date[0] ;

}


?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<br><br><br><br><br><br>

<form method="post">
	

<input type="date" name="fecha">
<button type="submit" name="subir">
subir
</button>


</form>

</body>
</html>