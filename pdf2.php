<?php
session_start();
include 'php/conexion.php';
include 'php/agregar.php';
$array=$_SESSION['carrito'];
$date=date('d/m/y');
$numeroOficios=count($_SESSION['carrito']);






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

.tabla {
  empty-cells: hide;
  border-collapse:separate;
  border-color:white !important;
}
</style>
</head>
<body>
<div class="todo">
<table width="100%" >
  <tbody>
    <tr>
      <th align="left" width="250px"><img src="img/logoo.jpg"></th>
      <th ALIGN="RIGHT"> <H2> <i>DELEGACION COAHUILA</i></H2>    <i>SUBDELEGACION DE PRESTACIONES</i></th>
    </tr>
  </tbody>
</table>
<H3 ALIGN="CENTER"> <i>RELACION DE CORRESPONDENCIA</i></H3>


<table width="100%"  >
  <tbody>
    <tr>
      <th align="left" width="250px">FECHA: '.$date.'</th>
        <th> </th>
        <th> </th>
        <th> </th>
        <th> </th>
      <th ALIGN="LEFT">   </th>
    </tr>
    
    <tr>
<th> </th>
<th> </th>
    </tr>

    <tr>
    <th align="left" width="250px">LUGAR: <a style="text-decoration: UNDERLINE">SALTILLO,COAHUILA</a></span></th>
    <th> </th>
        <th> </th>
        <th> </th>
        <th> </th>
    <th ALIGN="LEFT">  </th>
    </tr>
  </tbody>
</table>
<br><br> 
<table width="100%" border="1" cellpadding="4" cellspacing="0" >


  <tbody>
  
  <tr>

  
  <td rowspan="2" WIDTH="40PX" class="head"  ALIGN="CENTER">CANTIDAD <BR> SOBRES</td>
  <td COLSPAN="2" class="head" ALIGN="CENTER">DESTINATARIO</td>
  <td rowspan="2" class="head" ALIGN="CENTER"> OFICIOS</td>  

        </tr>

    <tr>
    <td class="head" ALIGN="CENTER" >NOMBRE</td>
    <td class="head" ALIGN="CENTER">LUGAR</td>
    
    <></>
    </tr>
    ';

    
    $see='9ac8';

//$sql="SELECT * FROM enviar WHERE clave IN ('$see','A6DB','F46B')";
    //$registro=mysqli_query($cnx,$sql);        
  //while($campo=mysqli_fetch_array($registro)){

      foreach($_SESSION['carrito'] as $indice=>$oficios){

    $html.= '
    <tr>
    <td ALIGN="CENTER"  style="border:1px solid black">1</td>
    <td ALIGN="LEFT" width="300px"  style="border:1px solid black" >'.$oficios['NOMBRE'].'<br> CALLE '.$oficios['DIRECCION'].'</td>
    <td ALIGN="CENTER" style="border:1px solid black" > '.$oficios['CIUDAD'].'</td>
    <td ALIGN="CENTER"  style="border:1px solid black" > 
    <table cellpadding="0" border="0  " cellspacing="" class="tabla" style="brodercolor:white">
     <tr>
     <td style="border:none">'.$oficios['OFICIO1'].'</td>
     </tr>
     <tr>
     <td style="border:none">'.$oficios['OFICIO2'].'</td>
     </tr>
     <tr>
     <td style="border:none">'.$oficios['OFICIO3'].'</td>
     </tr>
     <tr>
     <td style="border:none">'.$oficios['OFICIO4'].'</td>
     </tr>
     <tr>
     <td style="border:none">'.$oficios['OFICIO5'].'</td>
     </tr>
     <tr>
     <td style="border:none">'.$oficios['OFICIO6'].'</td>
     </tr>
     <tr>
     <td style="border:none">'.$oficios['OFICIO7'].'</td>
     </tr>
     <tr>
     <td style="border:none">'.$oficios['OFICIO8'].'</td>
     </tr>
     <tr>
     <td style="border:none">'.$oficios['OFICIO9'].'</td>
     </tr>
     <tr>
     <td style="border:none">'.$oficios['OFICIO10'].'</td>
     </tr>
     <tr>
     <td style="border:none">'.$oficios['OFICIO11'].'</td>
     </tr>
     <tr>
     <td style="border:none">'.$oficios['OFICIO12'].'</td>
     </tr>
     <tr>
     <td style="border:none">'.$oficios['OFICIO13'].'</td>
     </tr>
     <tr>
     <td style="border:none">'.$oficios['OFICIO14'].'</td>
     </tr>
     <tr>
     <td style="border:none">'.$oficios['OFICIO15'].'</td>
     </tr>
     <tr>
     <td style="border:none">'.$oficios['OFICIO16'].'</td>
     </tr>
     <tr>
     <td style="border:none">'.$oficios['OFICIO17'].'</td>
     </tr>
     <tr>
     <td style="border:none">'.$oficios['OFICIO18'].'</td>
     </tr>

     <tr>
     <td style="border:none">'.$oficios['OFICIO19'].'</td>
     </tr>
     <tr>
     <td style="border:none">'.$oficios['OFICIO20'].'</td>
     </tr>


    
    </table>
    
    
    </td>
    </tr>


    ';
  
  } //}
  $total=0;
  /*'.$oficios['OFICIO1'] .' <br>'.$oficios['OFICIO2'].'<br>'.$oficios['OFICIO3'].' <br>'.$oficios['OFICIO4'].' <br>'.$oficios['OFICIO5'].'<br>
    '.$oficios['OFICIO6'].'<br>'.$oficios['OFICIO7'].'<br>'.$oficios['OFICIO8'].' <br>'.$oficios['OFICIO9'].' <br>'.$oficios['OFICIO10'].'<br> 
    '.$oficios['OFICIO11'].'<br>'.$oficios['OFICIO12'].'<br>'.$oficios['OFICIO13'].' <br>'.$oficios['OFICIO14'].' <br>'.$oficios['OFICIO15'].'<br>
    '.$oficios['OFICIO16'].'<br>'.$oficios['OFICIO17'].'<br>'.$oficios['OFICIO18'].' <br>'.$oficios['OFICIO19'].' <br>'.$oficios['OFICIO20'].'<br>*/
    $html.='
    <tr>
    <td ALIGN="CENTER" style="border:1px solid black">'.$numeroOficios.'</td>
    <td colspan="3"  style="border:1px solid black">TOTAL DE SOBRES</td>
    </tr> 
    
  </tbody>
</table> 

<br><br>
<br><br>
</body>
</html>
';
$path = (getenv('MPDF_ROOT')) ? getenv('MPDF_ROOT') : __DIR__;
require_once $path . '/vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf([
	'margin_left' =>0,
	'margin_right' => 0,
	'margin_top' => 5,
	'margin_bottom' => 5,
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