<?php include '../../php/conexion.php';
session_start();
if (empty($_SESSION['usuario'])) {
echo'<script type="text/javascript"> alert("Tu sesión ha caducado");
window.location.href="../../index.php";</script>';
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- MDB -->
    <link rel="stylesheet" href="../../css/mdb.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="../../js/jquery.js "></script>
    <script src="../../js/cargar.js "></script>
    <link rel="stylesheet" href="../../estilo/style.css">
    <title>Document</title>
</head>
<body>
<div class="gridtop">
<img src="../../img/logo.png" alt="">
<h1> Correspondencia Externa</h1>
<h6>Delegación coahuila <br>
        Subdelegación de prestaciones   <br>
        Departamento de pensiones</h6>
        <style>
           .gridtop h6{
    color: white;

    text-align: right;
    margin-top: -30px;
    margin-right: 10px;
</style>
</div>
<p>
  
<center>
  <a class="btn btn-lig" href="externa.php" role="button" style="width: 70px; height: 50px; left: 100px; background-color: white;"><i class="fas fa-chevron-circle-left fa-2x"></i></a>

  <a class="btn btn-warning" href="externa-servicios.php" role="button" style="width: 70px; height: 50px; color: black; align-content: right:"><i class="fas fa-eraser fa-2x"></i></a></center>




  
  
</p>
<div class="row">
  <div class="col">
    <div class="collapse multi-collapse" id="multiCollapseExample1">
      <div class="card card-body">
       
      </div>
    </div>
  </div>
  <div class="col">
    <div class="collapse multi-collapse" id="multiCollapseExample2">
      <div class="card card-body">
       
      </div>
    </div>
  </div>
</div>
<div class="grid">

<div class="int">
<br><br>
<a href="../interna/interna-servicios.php"  class="disable" >Interna</a><br>
<a href="" class="select">Externa</a><br>
<a href="externa-servicios.php"  class="select">Servicios</a><br>
<a href="externa-seguridad.php" class="disable">Seguridad e higiene</a><br>
<a href="externa-medicina.php" class="disable">Medicina del trabajo</a><br>
<a href="externa-sentencia.php" class="disable">Cumplimiento de sentencia</a><br>

</div>


<div class="form">
<form  method="post"  action="../../php/registroOficio2.php" enctype="multipart/form-data" >
<h2>Servicios</h2>
<input type="hidden" name="servicio" value="servicios">
<input type="hidden" name="temas">
<label>Folio del oficio:</label>
<input type="text" name="folio" placeholder="Numero de oficio / folio" required>
<label>Fecha de recepción:</label>
<input type="date" name="fechaOficio" placeholder="Fecha de recepción" required>
<label>Selecciona el tema del oficio:</label>
<select name="tema" id="tema" required>
<option value="" >Tema</option>
<option value="Gasto funeral">Gasto funeral</option>
<option value="Certificado de poliza">Certificado de poliza</option>
<option value="Elaboracion o repoisicion de credencial de pensionado">Elaboracion o repoisicion de credencial de pensionado</option>
<option value="Constancia de estudio">Constancia de estudio</option>
<option value="Pension Alimenticia">Pension Alimenticia</option>
<option value="Otros">Otros</option>
</select>
<textarea name="otros" id="" class="otros" placeholder="Escribe que otros(Opcional) "></textarea>

<label>Escribe la ciudad (Opcional)</label>
<input type="text" name="ciudad" placeholder="Escribe la ciudad">
<label>¿Quien firma el oficio?:</label>
<input type="text" name="nombre" placeholder="¿Quien lo solicita?" required>
<label>Cargo de quien solicíta el oficio:</label>
<input type="text" name="cargo" placeholder="Cargo de quien solicíta el oficio" required>
<label>A quien se turnó el oficio:</label>
<select name="seTurno" id="" required>
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
<label for="susbcribe" class="label"> ¿Aplica dependencia?:
           
           <input type="checkbox" name="subscribe" id="checkDep"  class="check"  >
           </label>

                <input type="text" name="dependencia" id="dependencia" placeholder="Dependencia" >
              
                <label for="susbcribe" class="label"> Registrar Telefono:
           
                <input type="checkbox" name="subscribe" id="subscribe"  class="check" >
                </label>
                <input type="text" name="telefono" id="telefono"placeholder="Telefono ">
                

                <label for="susbcribe" class="label"> Registrar Correo:
           
           <input type="checkbox" name="subscribe" id="checkCorreo"  class="check" >
           </label>
                <input type="text" name="correo"  id="correo"placeholder="Correo ">
<label>En caso de escanear el oficio subirlo en pdf:</label>
<input type="file" name="file">


<button type="submit">Registrar</button>
</form>
</div>

           

        </div>
    </div>
    
</body>
</html>