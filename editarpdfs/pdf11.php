<?php
setlocale(LC_ALL,"es_MX.utf8"); 

session_start();
include '../php/conexion.php';
$diassemana = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
 
$date= $diassemana[date('w')]." ".date('d')." de ".$meses[date('n')-1]. " del ".date('Y') ;
$hiy=date('d/m/y');

$fecha=$_POST['fecha'];
$date= explode("-", $fecha);
$dia=intval($date[2]);
$mes=intval($date[1]);
$dates= $dia." de ".$meses[$mes-1]. " del ".$date[0] ;


$pesos=$_POST['can1'];

require '../vendor/autoload.php';
use Luecano\NumeroALetras\NumeroALetras;

$formatter = new NumeroALetras();
$formatter->apocope = true;
$letra=  ucfirst(strtolower($formatter->toInvoice($pesos, 2,  'M.N',)));



$user=$_SESSION['usuario'];
$sql="SELECT * FROM members WHERE usuario='$user' ";
$registro=mysqli_query($cnx,$sql);
$campo=mysqli_fetch_array($registro);

/**PERSONAL PARA PDF**/
$sql1="SELECT * FROM crud_employees WHERE id='32' ";
$personal=mysqli_query($cnx,$sql1);
$personal=mysqli_fetch_array($personal);


$id=$_SESSION['id'];

$length = 4;
$minutario=str_pad($id,$length,"0", STR_PAD_LEFT);

 
$folio="SP/DPSH/DB/".$minutario."/2021";

$oficio="DESIGNACION DE BENEFICIARIOS 22";


$editado=date('d-m_i_s');




$nombre=$id.'_'.$editado.'.pdf';
$nombre1=$id.'_'.$editado;

$sSQL="Update respuesta Set archivoRespuesta='$nombre1' Where minutario='$id'";
$registro1=mysqli_query($cnx,$sSQL);



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
      <th align="RIGHT" ><img src="../img/logo2.jpg" STYLE="MARGIN-TOP:-10PX" class="img"></th>
      <th ALIGN="right"  > <h5>REPRESENTACION ESTATAL DE COAHUILA <BR>SUBDELEGACION DE PRESTACIONES<BR>JEFATURA DEL DEPARTAMENTO DE PENSIONES,<BR>SEGURIDAD E HIGIENE.</h5></th>
    </tr>
  </tbody>
</table>

<BR><BR>

<table BORDER="0">
<tr>
<td width="365"></td>
<td ALIGN="right" WIDTH="100%" style="margin-left:10px"><H4>'.$folio.'</H4> <H4 STYLE="font-weight:1px"> Saltillo, Coahuila  '.$dates.'</H4> <BR> </td>
</tr>

</table>

<br>
<table  width="100%"  border="0" cellpadding="0" cellspacing="0">
  <tbody>
    <tr>
      
        <td>  <br><br> <br>  <h3>A QUIEN CORRESPONDA:</h3> <BR> 
        <br>
        
        <H3 style="font-weight:2px" >
        <table>
        <tr>
        <td style="text-align:justify">
        <h3 style="font-weight:2px">Por este conducto hago constar que se realizó 
        una búsqueda exhaustiva en el expediente Pensionario del C. <b> '.$_POST['nombre'].', R.F.C. <b>'.$_POST['rfc'].'</b>, 
        con número de pensión '.$_POST['numP'].'</b> fallecido el dia <b>'.$dates.'</b>, 
        mismo que <b>NO se encontró</b> dicho formato de Designación de Beneficiarios del Seguro de Vida Institucional de <b>'.$_POST['meses'].' meses</b>, 
        donde se le descontaba por el concepto <b>'.$_POST['concepto'].'</b> de su talón de pago de $ <b>'.$_POST['can1'].' ('.$letra.')</b>.
        
        </b></H3></table></tr>
        <br>
        
        
 
      
<br>
<table>
<tr>
<td style="text-align:justify">
<h3 style="font-weight:1px" >Sin otro particular, reciba un respetuoso saludo. 
<br> 
</tr>
</table>
</h3>
<br>

<BR>



        
</table>



<h3 ALIGN="left">ATENTAMENTE</h3>
<br>
<h3 ALIGN="left">'.$personal['nombre'].' <BR> '.$personal['cargo'].' <BR> </h3>

<BR><BR><BR><BR><BR><BR><BR><BR>
<H5 style="font-weight:1px" ALIGN="left">Realiza: <br>
<br>
C. '.$campo['nombre'].'<br> '.$campo['cargo'].'

<br><br>
<br><br><br><br>
<br><br>
<br><br>




<h6>Guadalupe victoria #416, Zona Centro, Saltillo, Coahuila,C.P 25000,  Tel:(844) 4389898 www.gob.mx/issste</h6>
</body> 
</html>
';
$path = (getenv('MPDF_ROOT')) ? getenv('MPDF_ROOT') : __DIR__;
require_once $path . '/../vendor/autoload.php';
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
$mpdf->Output("../pdfsElaborados/$nombre",'F');


header("location:../pdfsElaborados/$nombre");
