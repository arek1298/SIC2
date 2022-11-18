<?php


setlocale(LC_ALL,"es_MX.utf8"); 

session_start();
include 'php/conexion.php';
$diassemana = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
 
$date3= $diassemana[date('w')]." ".date('d')." de ".$meses[date('n')-1]. " del ".date('Y') ;
$hiy=date('d/m/y');


$fecha=$_POST['fechaS'];
$date= explode("-", $fecha);
$dia=intval($date[2]);
$mes=intval($date[1]);
$dates= $dia." de ".$meses[$mes-1]. " del ".$date[0] ;


$user=$_SESSION['usuario'];
$sql="SELECT * FROM members WHERE usuario='$user' ";
$registro=mysqli_query($cnx,$sql);
$campo=mysqli_fetch_array($registro);


$rs = mysqli_query($cnx, "SELECT MAX(minutario) AS id FROM respuesta");
if ($row = mysqli_fetch_row($rs)) {
$id = trim($row[0]);

$numero= $id+1;

$rfcNP= $_POST['rfc']."-" .$_POST['NP'];

$length = 4;
$minutario=str_pad($numero,$length,"0", STR_PAD_LEFT);


}

/**PERSONAL PARA PDF**/
$sql1="SELECT * FROM crud_employees WHERE id='1' ";
$personal=mysqli_query($cnx,$sql1);
$personal=mysqli_fetch_array($personal);



$folio="SP/DPSH/EC/".$minutario."/2021";


$oficio="ELABORACION DE CUENTA";


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
<td ALIGN="right" WIDTH="100%" style="margin-left:10px"><H4>'.$folio.'</H4> <H4 STYLE="font-weight:1px"> Saltillo, Coahuila  '.$date3.'</H4> <BR> </td>
</tr>

</table>

<br>
<table  width="100%"  border="0" cellpadding="0" cellspacing="0">
  <tbody>
    <tr>
    <td ALIGN="CENTER"><br><br>
<br>
<br>

    <h3 > ELABORACIÓN DE CUENTA POR LIQUIDAR CERTIFICADA. <BR> (CUMPLIMIENTO DE SENTENCIA)</h3>
  
    </td>
      </tr>    
</table >
<BR>
<table  border="1" cellpadding="2" cellspacing="0" ALIGN="CENTER" WIDTH="100%">
<tr>
<td><H4>PROMOVENTE</H4></td>
<td><H4>'.$_POST['promo'].'</H4></td>
</tr>
<tr>
<td><H4>RFC</H4></td>
<td><H4>'.$_POST['rfc'].'</H4></td>
</tr>
<tr>
<td><H4>No. PENSION</H4></td>
<td><H4>'.$_POST['NP'].'</H4></td>
</tr>

<tr>
<td><H4>DOMICILIO</H4></td>
<td><H4>'.$_POST['domicilio'].'</H4></td>
</tr>
<tr>
<td><H4>CONCEPTO A PAGAR</H4></td>
<td><H4> '.$_POST['pago'].'</H4></td>
</tr>
<tr>
<td><H4>PERIODO</H4></td>
<td><H4>'.$_POST['periodo'].'</H4></td>
</tr>
<tr>
<td><H4>FECHA DE SENTENCIA</H4></td>
<td><H4>'.$dates.'</H4></td>
</tr>
<tr>
<td><H4>EMISOR DE LA SENTENCIA</H4></td>
<td><H4>'.$_POST['emisor'].'</H4></td>
</tr>
<tr>
<td><H4>No. EXPEDIENTE</H4></td>
<td><H4>'.$_POST['numEx'].'</H4></td>
</tr>
<tr>
<td><H4>CIFRA A PAGAR</H4></td>
<td><H4> $ '.$_POST['cifra'].'</H4></td>
</table>

<h3 ALIGN="left" style="font-weight:1"><b>LA CANTIDAD A REINTEGRARSE SE OBTIENE DE LA SIGUIENTE MANERA: </b><BR>Se aplican incrementos más favorables a la cuota diaria del pensionista, haciendo un comparativo entre los incrementos conforme a los trabajadores en activo y los incrementos conforme al indice nacional de los precios al consumidor, dando como resultado la cantidad a reintegrar.</h3>
<br>
<br>
<br>
<br>
<BR>
<br>
<br>
<br>
<br>


<table BORDER="1" ALIGN="CENTER" cellpadding="0" cellspacing="0" >
<tr>
<td  ALIGN="CENTER" HEIGHT="20px"><B> </B><br><BR></td>
<td  ALIGN="CENTER" HEIGHT="20px"><B>LIC. JESUS LOREDO GONZÁLEZ </B><br>JEFE DE DEPTO. DE PENSIONES <BR> SEGURIDAD E HIGIENE(Autoriza) </td>

<td ALIGN="CENTER"><B>C. '.$campo['nombre'].' </B><BR> '.$campo['cargo'].'</td>
<td ALIGN="CENTER"><B>C. RITA LETICIA CEJA MARTINEZ </B><BR>JEFA DE OFICINA DE PENSIONES</td>
</tr>
</table>

<br><br>
<br><br>
<br><br>
<br><br>

<h6>Guadalupe victoria #416, zona centro, Saltillo, Coahuila,C.P 25000, Tel:(844) 4389898 www.gob.mx/issste</h6>

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
