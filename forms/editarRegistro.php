<?php 
include '../php/conexion.php';
session_start();
if (empty($_SESSION['usuario'])) {
echo'<script type="text/javascript"> alert("Tu sesión ha caducado");
window.location.href="../index.php";</script>';
}
if ($_POST['folio']=='') {
  echo'<script type="text/javascript"> alert("aun no se ha seleccionado ningun oficio");
window.location.href="editar.php";</script>';
}


$folio=$_POST['folio'];



$sql="SELECT * FROM correspondencia WHERE folio ='$folio'";
$registro = mysqli_query($cnx,$sql);
$campo=mysqli_fetch_array($registro);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilo/style.css">
    <link rel="stylesheet" href="../estilo/style2.css">
    <script src="../js/jquery.js "></script>
    <script src="../js/cargar.js "></script>
    <script src="../js/main.js"></script>
    <title>Document</title>
</head>
<body>
<div class="gridtop">
<img src="../img/logo.png" alt="">
<h1> Correspondencia Interna</h1>
<h3>Delegación coahuila <br>
        Subdelegación de prestaciones   <br>
        Departamento de pensiones</h3>
</div>
<br>
<a href="internas.php" style="margin-left: 10px;">Regresar</a>
<h1>Editar datos</h1>


<div class="form">


<form method="post" action="guardar.php">
    <input type="hidden" name="id" value="<?php echo $campo['id']?>">
    <label>Folio:</label>
    <input type="text" name="folio" value="<?php echo $campo['folio']?>">    
    <label>Tipo de correspondencia:</label>
    <select name="correspondencia" id="correspondencia" required>
<option value="Interna">Interna</option>
<option value="Externa">Externa</option>
  </select> 
    <label>Tipo de servicio:</label>
    <select name="servicio" id="servicio" r>
<option value="Seguridad e Higiene">Seguridad e Higiene</option>
<option value="Cumplimiento de sentencias">Cumplimiento de sentencias</option>
<option value="Medicina del trabajo">Medicina del trabajo</option>
<option value="Servicios">Servicios</option>
  </select> 
    
    <label>Fecha de recepción:</label>
    <input type="date" name="fechaOficio" value="<?php echo $campo['fechaOficio']?>">    
    <label>¿Quién firma el oficio?:</label>
    <input type="text" name="solicita" value="<?php echo $campo['solicita']?>">    
    <label>Departamento o ciudad:</label>
    <select name="dep" id="dep" >
<option value="">Departamentos</option>
<option value="finanzas">Finanzas</option>
<option value="recursos humanos">Rescursos humanos</option>
<option value="recursos financieros">Recursos financieros</option>
<option value="afiliacion o vigencia">Afiliacion o vigencia</option>
<option value="sociales y culturales">Sociales y culturales</option>
<option value="medica">Medica</option>
<option value="juridico">Juridico</option>
<option value="atencion a derechohabientes">Atencion al derecho habiente</option>
<option value="prestaciones monclova">Prestaciones monclova</option>
<option value="prestaciones torreon">Prestaciones torreon</option>
<option value="hospital-Saltillo">Hospital-Saltillo</option>
<option value="hospital-pideras">Hospital-Piedras</option>
<option value="hospital-acuña">Hospital-Acuña</option>
<option value="Hospital-Rosita">Hospital-Rosita</option>
<option value="Hospital-Sabinas">Hospital-Sabinas</option>
<option value="Hospital-Monclova">Hospital-Monclova</option>
<option value="Hospital-Torreon">Hospital-Torreon</option>
<option value="Hospital-Parras">Hospital-Parras</option>
<option value="Hospital-Fco. I. Madero">Hospital-Fco. I. Madero</option>
</select>
       
    <label>Tema:</label>
    <select name="tema" id="" style="width: 480px;" >
<option value=""     >Tema</option>
<option value="Gasto funeral">Gasto funeral</option>
<option value="Certificado de poliza">Certificado de poliza</option>
<option value="Elaboracion o repoisicion de credencial de pensionado">Elaboracion o repoisicion de credencial de pensionado</option>
<option value="Constancia de estudio">Constancia de estudio</option>
<option value="Pension Alimenticia">Pension Alimenticia</option>
<option value="Otros">Otros</option>

</select>
     
    <label> se turno:</label>

    <select name="asigno" id="" >
<option value="" >A quien se le turnó</option>
<?php 
  $sql="SELECT * FROM members";
  $registro=mysqli_query($cnx,$sql);                
  while($oficios=mysqli_fetch_array($registro)){

     $personas=$oficios['nombre'];
?>

<?php foreach($ejecutar as $oficios)  ?>
<option value="<?php echo $oficios['nombre'] ?>"><?php echo $personas ?></option>

<?php  }?>

</select>
       
    <button type="submit" style="border: 2px solid white">Guardar cambios</button>
</form>

</div>



         
</body>
</html>