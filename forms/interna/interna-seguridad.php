
<?php 
include '../../php/conexion.php';
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
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../../estilo/style.css">
    <script src="../../js/jquery.js "></script>
    <script src="../../js/cargar.js "></script>
    <script src="../../js/main.js"></script>
    <title>Document</title>
</head>
<body>
<div class="gridtop">
<img src="../../img/logo.png" alt="">
<h1> Regístro de Correspondencia Interna</h1>
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
  <a class="btn btn-lig" href="interna.php" role="button" style="width: 70px; height: 50px; left: 100px; background-color: white;"><i class="fas fa-chevron-circle-left fa-2x"></i></a>

  <a class="btn btn-warning" href="interna-seguridad.php" role="button" style="width: 70px; height: 50px; color: black; align-content: right:"><i class="fas fa-eraser fa-2x"></i></a></center>




  
  
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
<a href="../interna/interna-servicios.php"  class="select" >Interna</a><br>
<a href="" class="disable">Externa</a><br>
<a href="interna-servicios.php"  class="disable">Servicios</a><br>
<a href="interna-seguridad.php" class="select">Seguridad e higiene</a><br>
<a href="interna-medicina.php" class="disable">Medicina del trabajo</a><br>
<a href="interna-sentencia.php" class="disable">Cumplimiento de sentencia</a><br>

</div>


<div class="form">
<form  method="post"  action="../../php/registroOficio.php" enctype="multipart/form-data">
<h2>Seguridad e Higiene</h2>
<input type="hidden" name="servicio" value="Seguridad e Higiene">
<input type="hidden" name="temas">
<label>Folio del oficio:</label>
<input type="text" name="folio" placeholder="Numero de oficio / folio" required>
<label>Fecha de recepción:</label>
<input type="date" name="fechaOficio" placeholder="Fecha de recepción" required>

<label>Selecciona un departamento:</label>
<select name="departamento" id="depa" required>
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
<option value="Hospital-Parras">Hospital-Parras</option>
<option value="Hospital-Fco. I. Madero">Hospital-Fco. I. Madero</option>
</select>
<label>Selecciona el tema del oficio:</label>
<select name="tema" required >
<option value="" >Tema</option>
<option value="Subsidio">Subsidio</option>
<option value="Riesgo de trabajo">Riesgo de trabajo</option>
<option value="Comision de seguridad e higiene">Comision de seguridad e higiene</option>
<option value="Gasto funeral">Gasto funeral</option>
<option value="Otro">Otro</option>
</select>

</select>

<textarea name="otros" id="" class="otros" placeholder="Escribe que otros (Opcional)"></textarea>
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
<label for="susbcribe" class="label"> -Registrar Correo:
           
           <input type="checkbox" name="subscribe" id="checkCorreo"  class="check" >
           </label>
                <input type="text" name="correo"  id="correo"placeholder="Correo ">
                

<label>En caso de escanear el oficio subirlo en pdf:</label>
              <input type="file" name="file">


<button type="submit">Registrar</button>
</form>
</div>

            <br><br><br>
                  

                    
        </div>
    </div>
    
</body>
</html>