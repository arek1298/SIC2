<?php
session_start();
include 'php/conexion.php';

$diassemana = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
 
$date3= $diassemana[date('w')]." ".date('d')." de ".$meses[date('n')-1]. " de ".date('Y') ;
$hiy=date('d/m/y');



$fecha=$_POST['fecha'];
$date= explode("-", $fecha);
$dia=intval($date[2]);
$mes=intval($date[1]);
$dates= $dia." de ".$meses[$mes-1]. " del ".$date[0] ;


$fecha2=$_POST['fechaN'];
$date2= explode("-", $fecha2);
$dia2=intval($date2[2]);
$mes2=intval($date2[1]);
$dates2= $dia2." de ".$meses[$mes2-1]. " del ".$date2[0] ;



$rs = mysqli_query($cnx, "SELECT MAX(minutario) AS id FROM respuesta");
if ($row = mysqli_fetch_row($rs)) {
$id = trim($row[0]);


$numero= $id+1;


$length = 4;
$minutario=str_pad($numero,$length,"0", STR_PAD_LEFT);

}

$user=$_SESSION['usuario'];
$sql="SELECT * FROM members WHERE usuario='$user' ";
$registro=mysqli_query($cnx,$sql);
$campo=mysqli_fetch_array($registro);

/**PERSONAL PARA PDF**/
$sql1="SELECT * FROM crud_employees WHERE id='32' ";
$personal=mysqli_query($cnx,$sql1);
$personal=mysqli_fetch_array($personal);



$folio="SP/DPSH/PD/".$minutario."/2021";


$oficio="PETICION DE DOCUMENTOS";


mysqli_query($cnx,"INSERT INTO respuesta values
(
' ',  
'$folio',
'$hiy',
'$_SESSION[usuario]',
'$oficio',
'$minutario',
'PDF'
)");

$nombre=$minutario.'.pdf';
$html = '
<html>
<head>
<style>
body {font-family: sans-serif;
  font-size: 10pt;
}
p { margin: 0pt; }
table.items {
  border: 0.1mm solid #000000;
}
td { vertical-align: top; }
.items td {
  border-left: 0.1mm solid #000000;
  border-right: 0.1mm solid #000000;
}
table thead td { background-color: #EEEEEE;
  text-align: center;
  border: 0.1mm solid #000000;
  font-variant: small-caps;
}
.items td.blanktotal {
  background-color: #EEEEEE;
  border: 0.1mm solid #000000;
  background-color: #FFFFFF;
  border: 0mm none #000000;
  border-top: 0.1mm solid #000000;
  border-right: 0.1mm solid #000000;
}
.items td.totals {
  text-align: right;
  border: 0.1mm solid #000000;
}
.items td.cost {
  text-align: "." center;
}
.img{
width:300px;
MARGIN-TOP:10PX;
margin-left:10px;
}
.TEXTO{
    font-weight:10px;   
}
.TEXTO a{
  color:white;
}
.TEXTOS{
  font-weight:10px;
  border: 1px solid black;
  color:white;
}
H2{
    FONT-SIZE:20PX;
    width:500px;  
}
.lugar{
  margin-top:400px;
    margin-left: 280px;
}
.todo{  
  padding:15px;
  margin:15px;
}
.a{
  color:white;
}
H2{
  text-transform:uppercase;
}
.img{
position:relative;
}
.head{
  background-color: #C2C2C2;
  
}

.2021{
  margin-left:450px;
  margin-top:-90px;
  width:300px;
  
  }
  h6{
    width:400px;
    margin-top:-100px;
    font-weight:1px;
  
  }

  h3{


  }
  .line{
    border:1px solid #FFE157  ;
    width:450px;
    
    position:absolute;
  }
  .rev{
    position: right;
    top: 100px;
    left: 100px;
  }
  .p{
    width: 50px;
  }

  td { vertical-align: top; }
.items td {
  border-left: 0.1mm solid #000000;
  border-right: 0.1mm solid #000000;
}
table thead td { background-color: #EEEEEE;
  text-align: center;
  border: 0.1mm solid #000000;
  font-variant: small-caps;
}
.todo{	
	padding:15px;
	margin:15px;
}

.celda{
  border: 1px;
  width: 100px;
  
}
.tabla{
  background-color: whithe;
  border-left-color: black;
  border-top-color: whithe;
}

td { vertical-align: top; }
.items td {
	border-left: 0.1mm solid #000000;
	border-right: 0.1mm solid #000000;
}
table thead td { background-color: #EEEEEE;
	text-align: center;
	border: 0.1mm solid #000000;
	font-variant: small-caps;
}
</style>
</head>
<body>
<div class="todo">
<table width="100%" >
  <tbody>
    <tr>.
      <th align="RIGHT" ><img src="img/logo2.jpg" STYLE="MARGIN-TOP:-10PX" class="img"></th>
      <th ALIGN="right"  > <h5>REPRESENTACION ESTATAL DE COAHUILA <BR>SUBDELEGACION DE PRESTACIONES<BR>JEFATURA DEL DEPARTAMENTO DE PENSIONES,<BR>SEGURIDAD E HIGIENE.</h5></th>
    </tr>
  </tbody>
</table>

<BR><BR>

<table BORDER="0">
<tr>
<td width="360"></td>
<td ALIGN="right" WIDTH="100%" style="margin-left:9px"><H4>No. de oficio '.$folio.'</H4> <H4 STYLE="font-weight:1px">Saltillo, Coah., '.$date3.'<br> </td>
</tr>

</table>
<br>

<B><h3>C. ELISA MARIA NELSON ESCOBEDO <BR>
        JEFE DE LA UNIDAD JURIDICA DEL <BR> ISSSTE EN COAHUILA.</h3></b><br><br>
<table   border="0" cellpadding="0" cellspacing="0" width="700">
  <tbody>
    <tr>
      
        <td>  <P><br>
  
        <td style="text-align:justify">
    <H3 style="font-weight:2px">En atención al juicio <b>'.$_POST['juicio'].'</b> de fecha
     <b>  '.$dates.'</b> emitida por el <b>'.$_POST['lugarP'].'</b>, promovido por  <b>C. '.$_POST['promo'].'</b>, 
     en el que solicita dar cumplimiento de sentencia, me permito informarle que esta Jefatura de Departamento es conocedora a partir de la notificación realizada el día  <b> '.$dates2.'</b>, del cual nos encontramos en imposibilitados para poder cumplir en el término que se establece, debido a que no contamos con <b>la Hoja de evolución salarial misma que es requisito indispensable para efectuar la revisión de pensión de el siguiente actor</b>.
     <br>
     
     

        
        <table width="100%"  border="1" cellpadding="2" cellspacing="0">
</table>
<br>

<h3 style="font-weight:1px" ></h3>
<BR>

<table  border="1" cellpadding="2" cellspacing="0" ALIGN="CENTER" WIDTH="90%">
<tr>
<td><H4>NOMBRE:</H4></td>
<td><H4>'.$_POST['nombreA'].'</H4></td>
</tr>
<tr>
<td><H4>RFC:</H4></td>
<td><H4>'.$_POST['rfcA'].'</H4></td>
</tr>
<tr>
</table>

<BR>*La hoja de evolución salarial (deberá ser desglosada año con año, desde el inicio de la pensión a la fecha),
es importante contar con toda la información que tiene dicho documento ya que sin esta es imposible hacer el trámite correspondiente que nos demanda el juicio.
<br>
<br>



<p>Sin más por el momento quedo a sus órdenes, para cualquier aclaración al respecto.</p>
      </Td>
</table>
<BR>


<h3 ALIGN="left">ATENTAMENTE:</h3>

<BR>
<h3 ALIGN="left">'.$personal['nombre'].'<BR> '.$personal['cargo'].'</h3>




<br><br>
<br><br>
<br>


<table border="0" ALIGN="left" WIDTH="">

<tr >
<td ALIGN="left" top="">
Elaboró:'.$campo['nombre'].'<br> '.$campo['cargo'].'



<TD></TD>
</tr> 
c.c.p. Expediente.
</table>



<br><br>

<br><br>





</body>
</html>
';
$path = (getenv('MPDF_ROOT')) ? getenv('MPDF_ROOT') : __DIR__;
require_once $path . '/vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf([
  'margin_left' =>10,
  'margin_right' => 15,
  'margin_top' => 10,
  'margin_bottom' => 10,
  'margin_header' => 0,
  'margin_footer' => 1
]);
$mpdf->SetProtection(array('print'));
$mpdf->SetTitle("Correspondencia");
$mpdf->showWatermarkText = true;
$mpdf->watermark_font = 'DejaVuSansCondensed';
$mpdf->watermarkTextAlpha = 0.1;
$mpdf->SetDisplayMode('fullpage');
$mpdf->WriteHTML($html);
$mpdf->Output("pdfsElaborados/$nombre",'F');


header("location:pdfsElaborados/$nombre");
