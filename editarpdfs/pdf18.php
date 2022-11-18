<?php
session_start();
include '../php/conexion.php';

$diassemana = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
 
$date= $diassemana[date('w')]." ".date('d')." de ".$meses[date('n')-1]. " de ".date('Y') ;
$hiy=date('d/m/y');



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

$folio="SP/DPSH/DS/".$minutario."/2021";


$oficio="DEVOLUCION DE SENTENCIA";



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
  empty-cells: hide;
  border-collapse: separate;
  


}

.tabla td{
  border:1px solid black;
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
      <th align="RIGHT" ><img src="../img/logo2.jpg" STYLE="MARGIN-TOP:-10PX" class="img"></th>
      <th ALIGN="right"  > <h5>REPRESENTACION ESTATAL DE COAHUILA <BR>SUBDELEGACION DE PRESTACIONES<BR>JEFATURA DEL DEPARTAMENTO DE PENSIONES,<BR>SEGURIDAD E HIGIENE.</h5></th>
    </tr>
  </tbody>
</table>

<BR><BR>

<table BORDER="0">
<tr>
<td width="360"></td>
<td ALIGN="right" WIDTH="100%" style="margin-left:9px"><H4>No. de oficio '.$folio.'</H4> <H4 STYLE="font-weight:1px">Saltillo, Coah., '.$date.'<br><br> </H4> </td>
</tr>

</table>
<br>

<B><h3>C. ELISA MARIA NELSON ESCOBEDO <BR>
        JEFE DE LA UNIDAD JURIDICA <BR> PRESENTE.-</h3></b><br><br>
<table   border="0" cellpadding="0" cellspacing="0" width="100%">
  <tbody>
    <tr>
      
        <td>  <P><br>
  
        <td style="text-align:justify">
    <h3 style="font-weight:1px"> Sirva la presente para devolver a usted las sentencia(s) que se enlistan en razón a que no corresponden al área de Departamento de Pensiones.</h3>
     
     
        
</table>        

<br>
<table border="0" style="width:100%" cellpadding="3" cellspacing="0" class="tabla">

<tr>

<td class="head" ><b  >Nº Oficio</b></td>
<td class="head" ><b>ACTOR</b></td>
<td class="head" ><b>EXPEDIENTE</b></td>

</tr>

<tr>

<td><h4 style="font-weight:1px">'.$_POST['numeroOficio'].'</h4></td>
<td><h4 style="font-weight:1px">'.$_POST['nombre'].'</h4></td>
<td><h4 style="font-weight:1px">'.$_POST['expediente'].'</h4></td>

</tr>
<tr>

<td><h4 style="font-weight:1px">'.$_POST['numeroOficio2'].'</h4></td>
<td><h4 style="font-weight:1px">'.$_POST['nombre2'].'</h4></td>
<td><h4 style="font-weight:1px">'.$_POST['expediente2'].'</h4></td>

</tr>
<tr>

<td><h4 style="font-weight:1px">'.$_POST['numeroOficio3'].'</h4></td>
<td><h4 style="font-weight:1px">'.$_POST['nombre3'].'</h4></td>
<td><h4 style="font-weight:1px">'.$_POST['expediente3'].'</h4></td>

</tr>

<tr>
<td><h4 style="font-weight:1px">'.$_POST['numeroOficio4'].'</h4></td>
<td><h4 style="font-weight:1px">'.$_POST['nombre4'].'</h4></td>
<td><h4 style="font-weight:1px">'.$_POST['expediente4'].'</h4></td>
</tr>
</table>

<br>

<table style="width:100%">
<tr>
<td style="text-align:justify">
<h3 style="font-weight:1px">En razón de lo anterior solicito que se remita a la autoridad responable para su cumplimiento.</h3>
</td>
</tr>
</table>


<h3 ALIGN="left">ATENTAMENTE:</h3>

<BR>
<h3 ALIGN="left">'.$personal['nombre'].'<BR> '.$personal['cargo'].'</h3>




<br><br>
<br><br>
<br>


<table border="0" ALIGN="left" WIDTH="100%">

<tr >
<td ALIGN="left" >
Elaboró:<br>'.$campo['nombre'].'<br> '.$campo['cargo'].'
</td>
</tr> 

</table>



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
$mpdf->Output("../pdfsElaborados/$nombre",'F');


header("location:../pdfsElaborados/$nombre");
