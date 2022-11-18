<?php
session_start();
include 'php/conexion.php';

$diassemana = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
 
$date= $diassemana[date('w')]." ".date('d')." de ".$meses[date('n')-1]. " del ".date('Y') ;

$hiy=date('d/m/y');

$user=$_SESSION['usuario'];
$sql="SELECT * FROM members WHERE usuario='$user' ";
$registro=mysqli_query($cnx,$sql);
$campo=mysqli_fetch_array($registro);


/**PERSONAL PARA PDF**/
$sql1="SELECT * FROM crud_employees WHERE id='32' ";
$personal=mysqli_query($cnx,$sql1);
$personal=mysqli_fetch_array($personal);




$rs = mysqli_query($cnx, "SELECT MAX(minutario) AS id FROM respuesta");
if ($row = mysqli_fetch_row($rs)) {
$id = trim($row[0]);


$numero= $id+1;


$length = 4;
$minutario=str_pad($numero,$length,"0", STR_PAD_LEFT);

}



$folio="SP/DPSH/CE/".$minutario."/2021";

$oficio="CAMBIO DE ESTATUS";


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
p {	margin: 0pt; }
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
<td width="340"></td>
<td ALIGN="right" WIDTH="115%" style="margin-left:15px"><H4>'.$folio.'</H4> <H4 STYLE="font-weight:1px"> Saltillo, Coahuila  '.$date.'</H4> <BR> </td>
</tr>

</table>
<br>
<br>

<table   border="0" cellpadding="0" cellspacing="0" width="700">
  <tbody>
    <tr>
  
    
        <td>  <td style="text-align:justify">   <h2>LIC.MARIA DEL CARMEN GARZA JIMENEZ.<BR> JEFA DEL DEPARTAMENTO DE AFILIACION <BR> Y VIGENCIA</h2> </B><BR> <h3 ALIGN="left" style="font-weight:1">PRESENTE.</h2> <BR><BR>
		<H3 style="font-weight:2px">Sirva la presente para solicitar el cambio de Estatus de la  
		 <b>  C. '.$_POST['nombre'].'</b>, mismo que es beneficiario del <b> C. '.$_POST['nombreB'].'</b>
        , con <b> R.F.C '.$_POST['rfc'].', No. de ISSSTE de '.$_POST['numero'].'</b>. Lo anterior con el fin de dar continuidad de ortorgamiento de pensión por cuenta individual del derechohabiente
        antes mencionado.</H3>

        <br>
        <table width="100%"  border="1" cellpadding="2" cellspacing="0">
</table>
<br>
<h3 style="font-weight:1px"> </h3>
<br>
<h3 style="font-weight:1px" >En espera de sus atenciones sobre el particular, aprovecho la ocasión para enviarle un respetuoso saludo.</h3>
<BR>



        
</table>
<BR><BR>


<h3 ALIGN="left">ATENTAMENTE:</h3>

<BR>
<h3 ALIGN="left">'.$personal['nombre'].', <br> '.$personal['cargo'].'</h3>

<BR><BR>
<BR><BR><BR><BR>



<table border="0" ALIGN="LEFT" >

<tr >
<td ALIGN="LEFT"  >
Elaboro: <br>
C. '.$campo['nombre'].'<br>'.$campo['cargo'].'

</td>
<TD></TD>
</tr> 
</table>


<br><br>
<br><br>
<br><br>

<br><br>



<h6>Guadalupe victoria #416, zona centro, Saltillo, Coahuila,C.P 25000,  Tel:(844) 4389898 www.gob.mx/issste</h6>

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
