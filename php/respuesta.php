<?php 
session_start();
include 'conexion.php';
$folio=$_GET['folio'];

$fecha= date('d/m/y');

$sql="SELECT * FROM correspondencia WHERE folio ='$folio' ";
$registro=mysqli_query($cnx,$sql);
$campo=mysqli_fetch_array($registro);

$nombre=$campo['trabajo'];

if(isset($_POST['guardar'])){




    $fichero = $_FILES["file"];

    // Cargando el fichero en la carpeta "subidas"
    move_uploaded_file($fichero["tmp_name"], "forms/archivosRespuestas/".$fichero["name"]);
    
    
mysqli_query($cnx,"INSERT INTO respuesta values
(
' ',
'$folio',
'$fecha',
'$nombre',
'$_POST[descripcion]',
'$fichero[name]',
'Respuesta'
)");




echo'<script type="text/javascript"> alert("Registro correcto");
	window.location.href="responder.php";</script>';

}









?>