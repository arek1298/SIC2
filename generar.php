<?php
session_start();
include 'php/conexion.php';
include 'php/agregar.php';
include 'noSesion.php';

$caracteres_permitidos = '012345689ABCDEF';
   $longitud = 4;
   $clave= substr(str_shuffle($caracteres_permitidos), 0, $longitud);
    
    
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
<script>
		function miFuncion() {
            $("#nombre").hide();
      $("#calle").hide();
      $("#colonia").hide();
      $("#cp").hide();
      $("#ciudad").hide();
      $("#cargo").hide();
      $("#oficio6").hide();
      $("#oficio7").hide();
      $("#oficio8").hide();
      $("#oficio9").hide();
      $("#oficio10").hide();
      $("#oficio11").hide();
      $("#oficio12").hide();
      $("#oficio13").hide();
      $("#oficio14").hide();
      $("#oficio15").hide();
      $("#oficio16").hide();
      $("#oficio17").hide();
      $("#oficio18").hide();
      $("#oficio19").hide();
      $("#oficio20").hide();
      $("#oficio21").hide();
      $("#oficio22").hide();
      $("#oficio23").hide();
      $("#oficio24").hide();
      $("#oficio25").hide();
      $("#oficio26").hide();
      $("#oficio27").hide();
      $("#oficio28").hide();
      $("#oficio29").hide();
      $("#oficio30").hide();
      $("#label2").hide();
      $("#label3").hide();
      $("#label4").hide();
      $("#label5").hide();

		}

     
		</script>
<body onload="miFuncion()">

<div class="inline"> 

</div>
<div class="gridtop">
<img src="img/logo.png" alt="">
<h1>Enviar correspondencia</h1>

<br>
<h3>Delegacion coahuila <br>
        Subdelegacion de prestaciones   <br>
        Departamento de pensiones <br>
        </h3>

        
        </div>


<br>
<div class="gridGenerar">
<div class="respuesta" style="border:1px solid black ">
<br>

<form method="post"  >

<H3>SELECCIONA EL DESTINATARIO O AÑADE UNO NUEVO</H3>

<input type="hidden" value="<?php echo $clave  ?>" name="clave" >

<select name="destino" id="">
<option value="0" selected >SELECCIONA UN DESTINO</option>
<?php 
  $sql="SELECT * FROM destinos ";
  $registro=mysqli_query($cnx,$sql);                
  while($oficios=mysqli_fetch_array($registro)){

     $destinos=$oficios['nombre']." - ".$oficios['ciudad'];
?>

<?php foreach($ejecutar as $oficios)  ?>
<option value="<?php echo $oficios['nombre'] ?>"><?php echo $destinos ?></option>

<?php  }?>
<option value="0">Otro destinatario</option>
</select>


<br>
<label for="susbcribe" class="label"> -Otro destinatario:
           
    <input type="checkbox" name="subscribe" id="CheckDest"  class="check">
           
           </label>
                <input type="text" name="nombre" id="nombre" placeholder="¿A quien se dirige?">
                <input type="text" name="cargo" id="cargo" placeholder="Cargo de la persona">
                <input type="text" name="calle"  id="calle"placeholder="Calle">
                <input type="text" name="colonia"  id="colonia"placeholder="Colonia">
                <input type="text" name="cp"  id="cp"placeholder="Codigo Postal">
                <input type="text" name="ciudad"  id="ciudad"placeholder="Ciudad">
                <h3>ESCRIBE EL NOMBRE O EL FOLIO DE LOS OFICIOS A ENVIAR </h3><BR>
                <input type="text" placeholder="Oficio" name="oficio1"    id="oficio1" >
                <input type="text" placeholder="Oficio" name="oficio2"    id="oficio2" >  
                <input type="text" placeholder="Oficio" name="oficio3"    id="oficio3" > 
                <input type="text" placeholder="Oficio" name="oficio4"    id="oficio4" > 
                <input type="text" placeholder="Oficio" name="oficio5"    id="oficio5" > 

                
                <label for="susbcribe" class="label" id="label"> -Registrar mas oficios 
           
           <input type="checkbox" name="subscribe" id="CheckOfic"  class="check">
                  
                  </label>
                <input type="text" placeholder="Oficio" name="oficio6"    id="oficio6" >
                <input type="text" placeholder="Oficio" name="oficio7"    id="oficio7" >  
                <input type="text" placeholder="Oficio" name="oficio8"    id="oficio8" > 
                <input type="text" placeholder="Oficio" name="oficio9"    id="oficio9" > 
                <input type="text" placeholder="Oficio" name="oficio10"   id= "oficio10" > 

                
                <label for="susbcribe2" class="label" id="label2"> -Registrar mas oficios
           
           <input type="checkbox" name="subscribe2" id="CheckOfic2"  class="check">
                  
                  </label>
                <input type="text" placeholder="Oficio" name="oficio11"   id= "oficio11" >
                <input type="text" placeholder="Oficio" name="oficio12"   id= "oficio12" >  
                <input type="text" placeholder="Oficio" name="oficio13"   id= "oficio13" > 
                <input type="text" placeholder="Oficio" name="oficio14"   id= "oficio14" > 
                <input type="text" placeholder="Oficio" name="oficio15"   id= "oficio15" > 
                
                <label for="susbcribe3" class="label" id="label3"> -Registrar mas oficios
           
           <input type="checkbox" name="subscribe3" id="CheckOfic3"  class="check">
                  
                  </label>
                <input type="text" placeholder="Oficio" name="oficio16"   id= "oficio16" >
                <input type="text" placeholder="Oficio" name="oficio17"   id= "oficio17" >  
                <input type="text" placeholder="Oficio" name="oficio18"   id= "oficio18" > 
                <input type="text" placeholder="Oficio" name="oficio19"   id= "oficio19" > 
                <input type="text" placeholder="Oficio" name="oficio20"   id= "oficio20" > 
                
 <button name="registrar" value="agregar" id="boton" >Agregar</button>



</form>

 

<br><br>

</div>

<div class="grida2">
<?php if (empty($_SESSION['carrito'])) {
    echo "<br><h1 class='usuario'><b>Comienza capturando un oficio</b></h1>";
}else{  ?>    
    <br><br><br>    
<table align="center" style="background-color:white;" cellpadding="5">
    <tr>
        <td>
            <b>Nombre</b>
        </td>
           <td>
            <b>Direccion</b>
        </td>
           <td>
            <b>Oficios</b>
        </td>

           <td>
            <b>Caratula</b>
        </td>
           <td>
            <b>Borrar</b>
        </td>
    </tr>
<?php 


foreach($_SESSION['carrito'] as $indice=>$oficios){?>
<tr>
    <td style="text-align: left;">
       <?php echo $oficios['NOMBRE'] ?> 
    </td>

    <td style="text-align:left;">
       <?php echo $oficios['DIRECCION'] ?> 
    </td>

    <td>
       <?php echo $oficios['OFICIO1'] ?> <br>
       <?php echo $oficios['OFICIO2'] ?> <br>
       <?php echo $oficios['OFICIO3'] ?> <br>
       <?php echo $oficios['OFICIO4'] ?> <br>
       <?php echo $oficios['OFICIO5'] ?> <br>
       <?php echo $oficios['OFICIO6'] ?> <br>
       <?php echo $oficios['OFICIO7'] ?> 
    </td>

<td>
<form action="pdf.php" target="_blank" method="post">
                <input type="hidden" name="direccion" value="<?php echo $oficios['DIRECCION'] ?> ">
                <input type="hidden" name="ciudad" value="<?php echo $oficios['CIUDAD'] ?> ">
                <input type="hidden" name="nombre" id="nombre" value="<?php echo $oficios['NOMBRE'] ?> ">
                <input type="hidden" name="cargo" id="cargo" value="<?php echo $oficios['CARGO'] ?> ">
            
                <input type="hidden" placeholder="Oficio" name="oficio1"    id="oficio1" value="<?php echo $oficios['OFICIO1'] ?> ">
                <input type="hidden" placeholder="Oficio" name="oficio2"    id="oficio2" value="<?php echo $oficios['OFICIO2'] ?> ">  
                <input type="hidden" placeholder="Oficio" name="oficio3"    id="oficio3" value="<?php echo $oficios['OFICIO3'] ?> "> 
                <input type="hidden" placeholder="Oficio" name="oficio4"    id="oficio4" value="<?php echo $oficios['OFICIO4'] ?> "> 
                <input type="hidden" placeholder="Oficio" name="oficio5"    id="oficio5" value="<?php echo $oficios['OFICIO5'] ?> "> 
                <input type="hidden" placeholder="Oficio" name="oficio6"    id="oficio6" value="<?php echo $oficios['OFICIO6'] ?> ">
                <input type="hidden" placeholder="Oficio" name="oficio7"    id="oficio7" value="<?php echo $oficios['OFICIO7'] ?> ">  
                <input type="hidden" placeholder="Oficio" name="oficio8"    id="oficio8" value="<?php echo $oficios['OFICIO8'] ?> "> 
                <input type="hidden" placeholder="Oficio" name="oficio9"    id="oficio9" value="<?php echo $oficios['OFICIO9'] ?> "> 
                <input type="hidden" placeholder="Oficio" name="oficio10"   id= "oficio10" value="<?php echo $oficios['OFICIO10'] ?> "> 
                <input type="hidden" placeholder="Oficio" name="oficio11"   id= "oficio11" value="<?php echo $oficios['OFICIO11'] ?> ">
                <input type="hidden" placeholder="Oficio" name="oficio12"   id= "oficio12" value="<?php echo $oficios['OFICIO12'] ?> ">  
                <input type="hidden" placeholder="Oficio" name="oficio13"   id= "oficio13" value="<?php echo $oficios['OFICIO13'] ?> "> 
                <input type="hidden" placeholder="Oficio" name="oficio14"   id= "oficio14" value="<?php echo $oficios['OFICIO14'] ?> "> 
                <input type="hidden" placeholder="Oficio" name="oficio15"   id= "oficio15" value="<?php echo $oficios['OFICIO15'] ?> "> 
                <input type="hidden" placeholder="Oficio" name="oficio16"   id= "oficio16" value="<?php echo $oficios['OFICIO16'] ?> ">
                <input type="hidden" placeholder="Oficio" name="oficio17"   id= "oficio17" value="<?php echo $oficios['OFICIO17'] ?> ">  
                <input type="hidden" placeholder="Oficio" name="oficio18"   id= "oficio18" value="<?php echo $oficios['OFICIO18'] ?> "> 
                <input type="hidden" placeholder="Oficio" name="oficio19"   id= "oficio19" value="<?php echo $oficios['OFICIO19'] ?> "> 
                <input type="hidden" placeholder="Oficio" name="oficio20"   id= "oficio20" value="<?php echo $oficios['OFICIO20'] ?> "> 
                    
                <button type="submit" style="border:none; background-image: url(img/pdf.png); background-repeat: no-repeat;  width: 64px; height:64px; background-color: transparent !important;" > </button>


</form>
</td>

    <td>
        <form method="post">
            <input type="hidden" name="clave" value="<?php echo $oficios['CLAVE'] ?>">
        <button name="registrar" value="eliminar" id="boton" style="background-image: url(img/papelera.png); background-repeat:no-repeat; background-color:transparent !important; width: 64px; height:64px; border: none;" ></button>
</form>
    </td>
</tr>
<?php }?>
</table>




<form  action="pdf2.php">
    <button type="submit" name="relacion">Crear relacion</button>
</form>
<?php }?>
<a href="inicio.php">Regresar</a>
</div>
</div>
    

</body>

</html>  