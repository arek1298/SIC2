<?php
session_start();
include 'php/conexion.php';
$user=$_SESSION['usuario'];
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

}

$sql="SELECT * FROM members WHERE usuario='$user' ";
$registro=mysqli_query($cnx,$sql);
$campo=mysqli_fetch_array($registro);


/**PERSONAL PARA PDF**/
$sql1="SELECT * FROM crud_employees WHERE id='34' ";
$personal=mysqli_query($cnx,$sql1);
$personal=mysqli_fetch_array($personal);


$folio="SP/DPSH/CC/".$minutario."/2021";

$oficio="CAMBIO DE CUOTA";


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
<td width="350"></td>
<td ALIGN="right" WIDTH="115%" style="margin-left:15px"><H4>'.$folio.'</H4> <H4 STYLE="font-weight:1px"> Saltillo, Coahuila '.$date.'</H4> <BR> </td>
</tr>

</table>
<br>
<br>

<table   border="0" cellpadding="0" cellspacing="0" width="700">
  <tbody>
    <tr>
      
        <td>  <h3>LIC.ANA LIGIA GALINDO MADROÑO.<BR> JEFATURA DE SERVICIOS DE OPERACIONES DE PAGO<BR>PRESENTE .-</h3> <BR> <H3 style="font-weight:2px">Me permito solicitar de su valioso apoyo con la finalidad de que sea realizado 
         el cambio de cuota diaria de acuerdo al código de autoridad, del derechohabiente que a continuacion se señala:</H3>
        <br>
        <br>
        <table width="100%"  border="1" cellpadding="2" cellspacing="0">
  <tbody>
    <tr>
    <td width="180px"><h3>Nombre Fallecido:</h3></td>
    <td><h3 style="font-weight:1px">'.$_POST['nombreFallecido'].'</h3></td>

    </tr>
    
    
    <tr>
    <td width="180px"><h3>Nombre del beneficiario:</h3></td>
    <td><h3 style="font-weight:1px">'.$_POST['nombreBeneficiario'].'</h3></td>

    </tr>
    
    <tr>
    <td width="180px"><h3>Numero de Pensión:</h3></td>
    <td><h3 style="font-weight:1px">'.$_POST['numeroPension'].'</h3></td>

    </tr>
    
    <tr>
    <td width="180px"><h3>RFC:</h3></td>
    <td><h3 style="font-weight:1px">'.$_POST['rfc'].'</h3></td>

    </tr>
    
    <tr>
    <td width="180px"><h3>Cuota diaria existente:</h3></td>
    <td><h3 style="font-weight:1px">$'.$_POST['cuotaDiariaE'].'</h3></td>

    </tr>
    
    <tr>
    <td width="180px"><h3>Cuota diaria a modificar:</h3></td>
    <td><h3 style="font-weight:1px">$'.$_POST['cuotaDiariaM'].'</h3></td>

    </tr>
    
    <tr >
    <td width="180px" rowspan="2"><h3>Motivo</h3></td>
    <td  width="200px"><h3 style="font-weight:1px">'.$_POST['motivo'].'</h3></td>

    </tr>
    
    
    
  </tbody>
</table>
<br>
<h3 style="font-weight:1px" >Lo anterior se determinó procedente después de haber realizado su análisis y validación por parte del Jefe de Departamento de Pensiones Seguridad e Higiene en el Trabajo.</h3>
<br>

<BR>



        
</table>



<h3 ALIGN="center">ATENTAMENTE:<br></h3>
<br>
<br>


<h3 ALIGN="center">'.$personal['nombre'].' <br>
'.$personal['cargo'].'
<BR>
<BR>




<table border="0" ALIGN="center">

<tr >
<td ALIGN="LEFT" width="300px" >
<h6>
Valida: <br>
LIC.Jesús Loredo González<br>
Jefe del Departamento de Pensiones
</h6>
</td>


<td ALIGN="RIGHT"  width="300px">
<h6>
Elaboro: <br>
C. '.$campo['nombre'].'<BR>
'.$campo['cargo'].'
</h6>
</td>
</tr> 
</table>



<br><br>
<br><br>

<br><br>
<br><br>
<br><br>


<h6 style="font-weight:1px; font-size:10px">Guadalupe victoria #416, Zona Centro, Saltillo, Coahuila,C.P 25000 Tel:(844) 4389898 www.gob.mx/issste</h6>

</body>
</html>
';
$path = (getenv('MPDF_ROOT')) ? getenv('MPDF_ROOT') : __DIR__;
require_once $path . '/vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf([
	'margin_left' =>10,
	'margin_right' => 10,
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
