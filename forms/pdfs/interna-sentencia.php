<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../estilo/style.css">
    <title>Document</title>
</head>
<body>
<header>

</header>
<h1> Correspondencia Interna</h1>
    
<div class="grid">

<div class="int">
<br><br>
<a href=""class="select" >Interna</a><br><br>
<a href="">Externa</a><br><br>
</div>
<div>
<br><br>

<a href="interna-servicios.php"  >Servicios</a><br><br>
<a href="interna-seguridad.php" >Seguridad e higiene</a><br>    <br>
<a href="interna-medicina.php">Medicina del trabajo</a><br><br>
<a href="interna-sentencia.php" class="select">Cumplimiento de sentencia</a><br><br>
</div>

<div class="form">
<form  method="post" >
<h2>Cumplimiento de sentencia</h2>
<input type="text" name="folio" placeholder="Numero de oficio / folio">
<input type="text" name="fechaOficio" placeholder="Fecha del oficio">
<select name="" id="">
<option value="" selected disabled>Departamentos</option>
<option value="">Finanzas</option>
<option value="">Rescursos humanos</option>
<option value="">Recursos financieros</option>
<option value="">Afiliacion o vigencia</option>
<option value="">Sociales y culturales</option>
<option value="">Medica</option>
<option value="">Juridico</option>
<option value="">Atencion al derecho habiente</option>
<option value="">Prestaciones monclova</option>
<option value="">Prestaciones torreon</option>
<option value="">Hospital</option>
<option value="">Hospital-Piedras</option>
<option value="">Hospital-Acuña</option>
<option value="">Hospital-Rosita</option>
<option value="">Hospital-Sabinas</option>
<option value="">Hospital-Monclova</option>
<option value="">Hospital-Torreon</option>
<option value="">Hospital-Parras</option>
<option value="">Hospital-Fco. I. Madero</option>
</select>

<select name="" id="">
<option value="" selected disabled>Tema</option>
<option value="">Nulidad</option>
<option value="">Amparo</option>
<option value="">Laudos</option>
<option value="">Perticiones</option>

</select>


<select name="" id="">
    <option value=""></option>
</select>
<input type="text" name="solicita" placeholder="¿Quien lo solicita?">

<input type="text" name="email" placeholder="Correo Electrónico">
<input type="text-area" name="solicitud" placeholder="¿Que piden?">
<input type="text" name="seTurno" placeholder="¿A quien se le turno?">


<button type="submit">Registrar</button>
</form>
</div>

    </div>
    
</body>
</html>