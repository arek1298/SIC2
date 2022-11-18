
<?php 
session_start();

if (empty($_SESSION['usuario'])) {
echo'<script type="text/javascript"> alert("Tu sesión ha caducado");
window.location.href="../index.php";</script>';
}
#echo $_SESSION['usuario'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilo/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
    />
    <!-- MDB -->
    <link rel="stylesheet" href="../css/mdb.min.css" />
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- CSS only -->
<!-- CSS only -->
<!--link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous"-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="gridtop">
<img src="../img/logo.png" style="width: 130px;" alt="">
<h1> Correspondencia </h1>
<h3>Delegacion coahuila <br>
        Subdelegacion de prestaciones   <br>
        Departamento de pensiones</h3>
        
</div>
<style>
    .gridtop h3{
    color: white;
    text-align: right;
    margin-top: -32px;
    margin-right: 30px;

</style>


<br><br>
<div class="incline">
<a class="btn btn-lig" href="../inicio.php" role="button" style="width: 100px; height: 90px; background-color: white; border-color: black;"><i class="fas fa-chevron-circle-left fa-5x"></i></a></div>
<br><br>

</div>




<h1>Selecciona un tipo de Correspondencia</h1>
<br>
<br>
<br>

<div class="form">
<a href="interna/interna.php" class="btn btn-primary btn-lg" style="width: 350px; position: absolute; left: 270px; font-size: 30px; height: 100px;"  >Interna</h1></a><br>
<a href="externa/externa.php" class ="btn btn-primary btn-lg" style="width: 350px; position: absolute; left:750px; font-size: 30px; top: 288px; height: 100px;" >Externa</a><br>
<br><br>
<br><br>
<br><br>

<center><a href="editar.php" class ="btn btn-lg" style="width: 350px; position: absolute; left: 350px; max-height: 100px; border-color: black; font-size: 30px; top: 500px; height: 100px; left: 530px; background-color: white;">Editar<br> correspondencia</a><br></center>
</div>

<br><br>
</div>
<style>
.btn btn-lg{
    
    position: center;

}

    </div>
    
</body>
</html>