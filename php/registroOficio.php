<?php 
include 'conexion.php';

$fecha= date('d/m/y');
//VALIDAR CAMPOS DEL FORMULARIO
//if(empty($_POST['departamento']))
//{
  //validacion//echo 'debe poner un departamento';

//}
if(!empty($_POST['servicio']) 
  &&!empty($_POST['folio']) 
   &&!empty($_POST['fechaOficio'])                                                                                         
   &&!empty($_POST['nombre'])&&!empty($_POST['departamento'])){


    if(!empty($_POST['otros'])){
      $_POST['otros']=' - '.$_POST['otros'];
    }else{
      $_POST['otros']=' ';
    }

    if(empty($_POST['temas'])){
$_POST['temas']=" ";
    }else{
      $_POST['temas']=$_POST['temas']." - "; 
    }
     $otro=$_POST['temas'].$_POST['tema'].$_POST['otros'];


if(empty($_POST['correo'])){
$_POST['correo']="No aplica";
}

$correspon="Interna";



     $fichero = $_FILES["file"];

     // Cargando el fichero en la carpeta "subidas"
     move_uploaded_file($fichero["tmp_name"], "../forms/pdfs/".$fichero["name"]);
     
     


$nombre=$_POST['nombre'].'-'.$_POST['cargo'];

mysqli_query($cnx,"INSERT INTO correspondencia values
(
' ',
'$fecha',
'$correspon',
'$_POST[servicio]',
'$_POST[folio]',
'$_POST[fechaOficio]',
'$nombre',
'$_POST[departamento]',
'$otro',
'$_POST[seTurno]',
'$_POST[correo]',
'$fichero[name]',
' ',
' ',
' ',
' '
)");

echo'<script type="text/javascript"> alert("Registro correcto");
window.location.href="../forms/interna/interna.php";</script>';
 }
 ?>