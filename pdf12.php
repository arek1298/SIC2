<?php


setlocale(LC_ALL,"es_MX.utf8"); 

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



$folio="SP/DPSH/CCI/".$minutario."/2021";

$oficio="CAMBIO DE CLAVE INTERBANCARIA";


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
  background-color: #D3D1CE;
  

}

.2021{
margin-left:450px;
margin-top:-100px;
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
<td width="365"></td>
<td ALIGN="right" WIDTH="100%" style="margin-left:10px"><H4>'.$folio.'</H4> <H4 STYLE="font-weight:1px"> Saltillo, Coahuila  '.$date.'</H4> <BR> </td>
</tr>

</table>

<br>
<table  width="100%"  border="0" cellpadding="0" cellspacing="0">
  <tbody>
    <tr>
      
        <td>  <h3>C. LIC. JULIAN GARCIA HERNANDEZ<br>
        JEFE DE SERVICIOS TECNICOS DE LA <br>
        SUBDIRECCION DE PENSIONES<br>
        JESUS GARCIA CORONA No. 140, PISO 10 ALA “B”<br>
        COL. BUENAVISTA, C.P. 06350<br>
        ALCALDIA CUAUHTEMOC, MEXICO, D.F.<br>
        </h3> <BR> 
        <br>
        <table>
        <tr>
        <td style="text-align:justify">
        <H3 style="font-weight:2px" text-align="justify">Adjunto envió a Usted, solicitud de cambio de datos bancarios de C.<b> '.$_POST['nombre'].'</b>, 
        con R.F.C. <b>'.$_POST['rfc'].'</b> y No. de pensión F. <b>'.$_POST['numP'].'</b>, en virtud de que la cuenta <b>'.$_POST['banco'].'</b> que se entregó 
        para el trámite de pensión contaba con tope para los depósitos o transferencias, por lo que se anexa dicho 
        escrito por parte del interesado, copia del IFE, CURP, credencial de pensionista, concesión de pensión, 
        resumen de saldos de Pensionissste y 
        estados de cuenta emitidos por el banco (anterior y nuevo) para el cambio correspondiente.</H3>
        <br>
        </tr>
        </tr>
        </table>
      

<table>
<tr>
<td style="text-align:justify">
<h3 style="font-weight:1px" >Lo anterior con la finalidad de que sea realizado el pago del SAR, en espera de sus atenciones sobre el particular, aprovecho la ocasión para enviarle un respetuoso saludo.
</tr>
</tr>
</table>	  
<br> 

</h3>






        
</table>



<h3 ALIGN="left">ATENTAMENTE</h3>
<br>
<h3 ALIGN="left">'.$personal['nombre'].'<BR> '.$personal['cargo'].' <BR> </h3>

<BR><BR><BR><BR><BR><BR><BR><BR>
<H5 style="font-weight:1px" ALIGN="left">Realiza: <br>
<br>
C. '.$campo['nombre'].'<br> '.$campo['cargo'].'
</H5>

<br><br>
<br><br>
<br><br>
<br><br>
<h6>Guadalupe victoria #416, Zona Centro, Saltillo, Coahuila,C.P 25000, Tel:(844) 4389898 www.gob.mx/issste</h6>

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
