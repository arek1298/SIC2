<?php
session_start();
include 'php/conexion.php';

$diassemana = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
 
$date= $diassemana[date('w')]." ".date('d')." de ".$meses[date('n')-1]. " del ".date('Y') ;

$hiy=date('d/m/y');

$rs = mysqli_query($cnx, "SELECT MAX(minutario) AS id FROM respuesta");
if ($row = mysqli_fetch_row($rs)) {
$id = trim($row[0]);


$numero= $id+1;


$length = 4;
$minutario=str_pad($numero,$length,"0", STR_PAD_LEFT);

$user=$_SESSION['usuario'];
$sql="SELECT * FROM members WHERE usuario='$user' ";
$registro=mysqli_query($cnx,$sql);
$campo=mysqli_fetch_array($registro);


/**PERSONAL PARA PDF**/
$sql1="SELECT * FROM crud_employees WHERE id='32' ";
$personal=mysqli_query($cnx,$sql1);
$personal=mysqli_fetch_array($personal);




  if(empty($_POST['nombreFamiliar3'])){
    $_POST['nombreFamiliar3']=" ";
  }




}



$folio="SP/DPSH/AD/".$minutario."/2021";

$oficio="ALTA DE DEUDO";


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
  margin-top:-90px;
  font-weight:1px;

}
.line{
  border:1px solid #FFE157  ;
  width:480px;
  
  position:absolute;
}

.tabla {
  empty-cells: hide;
  border-collapse: separate;
  
}
.tabla td{
  border:1px solid black;
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

<table >
<tr>
<td width="350"></td>
<td ALIGN="RIGHT" WIDTH="100%" style="margin-left:20px"><H4>'.$folio.'</H4> <H4 STYLE="font-weight:1px"> Saltillo, Coahuila  '.$date.'</H4> <BR> </td>
</tr>

</table>


<table width="100%"  border="0" cellpadding="0" cellspacing="0">
  <tbody>
    <tr>
    <BR>
    <BR>
      
        <td>  <h3>LIC. MARÍA DEL CARMEN GARZA JIMÉNEZ<BR> JEFA DEL DEPARTAMENTO DE AFILIACIÓN<BR> Y PRESTACIONES ECONOMICAS,<BR>EDIFICIO</h3> <BR> <H3 style="font-weight:2px">Por este conducto solicito a usted alta 
        de posibles deudos por Fallecimiento del '.$_POST['tipodealta'].' del regimen '.$_POST['tipoderegimen'].' del caso 
        que a continuacion se describe:</H3>

        <br>
        <table width="100%"   cellpadding="5" cellspacing="0" class="tabla">
  <tbody>
    <tr>
    <td  CLASS="head" width="300px" height="5px"><h4>NOMBRE DEL TRABAJADOR FALLECIDO:</h4></td>
    <td  CLASS="head"><h4>N° ISSSTE</h4></td>
    <td  CLASS="head"><h4>CURP</h4></td>
    </tr>
    <tr>
    <td><h4 style="font-weight:1px">'.$_POST['nombreFallecido'].'</h4></td>
    <td><h4 style="font-weight:1px">'.$_POST['nIssste'].'</h4></td>
    <td><h4 style="font-weight:1px">'.$_POST['curp'].'</h4></td>
    </tr>
    <tr>
    <td  CLASS="head" width="300px"><h4>NOMBRE DEL FAMILIAR A REGISTRAR</h4></td>
    <td  CLASS="head"><h4>PARENTESCO</h4></td>
    <td  CLASS="head"><h4>CURP</h4></td>
    </tr>
    <tr>
    <td><h4 style="font-weight:1px">'.$_POST['nombreFamiliar'].'</h4></td>
    <td><h4 style="font-weight:1px">'.$_POST['parentesco'].'</td>
    <td><h4 style="font-weight:1px">'.$_POST['curpF'].'</td>
    </tr>  
    <tr>
    <td><h4 style="font-weight:1px">'.$_POST['nombreFamiliar1'].'</h4></td>
    <td><h4 style="font-weight:1px">'.$_POST['parentesco1'].'</td>
    <td><h4 style="font-weight:1px">'.$_POST['curpF1'].'</td>
    </tr>
    <tr>
    <td><h4 style="font-weight:1px">'.$_POST['nombreFamiliar2'].'</h4></td>
    <td><h4 style="font-weight:1px">'.$_POST['parentesco2'].'</td>
    <td><h4 style="font-weight:1px">'.$_POST['curpF2'].'</td>
    </tr>
    <tr>
    <td><h4 style="font-weight:1px">'.$_POST['nombreFamiliar3'].'</h4></td>
    <td><h4 style="font-weight:1px">'.$_POST['parentesco3'].'</td>
    <td><h4 style="font-weight:1px">'.$_POST['curpF3'].'</td>
    </tr>
  
    </tbody>
</table>
<h3 style="font-weight:1px" >Se anexan actas de defunción, y nacimiento, CURP, acta de matrimonio y comprobante de domicilio. <br>
<br> 
 Sin otro particular, reciba usted un respetuoso saludo.<br>
 <br>
</h3>

<h3 style="font-weight:6px" ALIGN=""><B>ATENTAMENTE<BR>'.$personal['cargo'].'<br> <br> <br>'.$personal['nombre'].'</h3></B>
<br><BR>      
</table>


<BR>


<H5 style="font-weight:1px" ALIGN="left">Realiza: <br>
<br>
C. '.$campo['nombre'].'<br>
'.$campo['cargo'].'
</H5>

<br><br>
<br><br><br><br><br>

<h6>Guadalupe victoria #416, zona centro, Saltillo, Coahuila,C.P 25000 Tel:(844) 4389898 www.gob.mx/issste</h6>

</body> 
</html>
';
$path = (getenv('MPDF_ROOT')) ? getenv('MPDF_ROOT') : __DIR__;
require_once $path . '/vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf([
	'margin_left' =>10,
	'margin_right' => 10,
	'margin_top' => 10,
	'margin_bottom' => 5,
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
