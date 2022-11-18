<?php
include 'php/conexion.php';


$oficio1=$_POST['oficio1'];
$oficio2=$_POST['oficio2'];
$oficio3=$_POST['oficio3'];
$oficio4=$_POST['oficio4'];
$oficio5=$_POST['oficio5'];
$oficio6=$_POST['oficio6'];
$oficio7=$_POST['oficio7'];
$oficio8=$_POST['oficio8'];
$oficio9=$_POST['oficio9'];
$oficio10=$_POST['oficio10'];
$oficio11=$_POST['oficio11'];
$oficio12=$_POST['oficio12'];
$oficio13=$_POST['oficio13'];
$oficio14=$_POST['oficio14'];
$oficio15=$_POST['oficio15'];
$oficio16=$_POST['oficio16'];
$oficio17=$_POST['oficio17'];
$oficio18=$_POST['oficio18'];
$oficio19=$_POST['oficio19'];
$oficio20=$_POST['oficio20'];

$clave=$_POST['clave'];
$ciudad=$_POST['ciudad'];
$cargo=$_POST['cargo'];
$nombre=$_POST['nombre'];
$direccion=$_POST['direccion'];






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
img{
width: 300px;
MARGIN-TOP:30PX;
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
	margin-top:350px;
    margin-left: 280px;
}

.todo{
	border: 2px solid black;
	padding:15px;
	margin:15px;
}

.a{
	color:white;
}
H2{
	text-transform:uppercase;
}






</style>
</head>
<body>
<div class="todo" height="100%">
<img src="img/logoo.jpg">
<br><br>
<h3> SUBDELEGACIÓN DE PRESTACIONES <BR> DEPARTAMENTO DE PENSIONES, <BR>SEGURIDAD E HIGIENE</h3>
<H3 CLASS="TEXTO">Calle victoria 425 Zona centro  <BR> Saltillo Coah. C.P.25000</H3>

<h3 class="TEXTO">OFICIO:  '.$oficio1.'<br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; '.$oficio2.'<br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; '.$oficio3.' <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; '.$oficio4.'<br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; '.$oficio5.' </h3>

<div class="lugar" >
<H3>'.$nombre.' <br>'.$cargo.'<br>'.$direccion.'<br>'.$ciudad.'</H3>
</div>
<br>
</div>
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
	'margin_footer' => 0
]);

$mpdf->SetProtection(array('print'));
$mpdf->SetTitle("Correspondencia");

$mpdf->showWatermarkText = true;
$mpdf->watermark_font = 'DejaVuSansCondensed';
$mpdf->watermarkTextAlpha = 0.1;
$mpdf->SetDisplayMode('fullpage');

$mpdf->WriteHTML($html);

$mpdf->Output();