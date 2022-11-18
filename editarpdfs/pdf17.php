<?php
session_start();
include '../php/conexion.php';

$diassemana = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
 
$date3= $diassemana[date('w')]." ".date('d')." de ".$meses[date('n')-1]. " de ".date('Y') ;
$hiy=date('d/m/y');


$fecha=$_POST['fecha'];
$date= explode("-", $fecha);
$dia=intval($date[2]);
$mes=intval($date[1]);
$dates= $dia." de ".$meses[$mes-1]. " del ".$date[0] ;




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

$folio="SP/DPSH/EP/".$minutario."/2021";


$oficio="ESCRITO DE PETICION";

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
<td ALIGN="right" WIDTH="100%" style="margin-left:9px"><H4>No. de oficio '.$folio.'</H4> <H4 STYLE="font-weight:1px">Saltillo, Coah., '.$date3.'<br><br> </H4> </td>
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
    <h3 style="font-weight:1px"> En atención a su oficio <b>'.$_POST['numeroOficio'].'</b>, en el cual nos solicita dar cumplimiento requerido mediante <b>Acuerdo</b> de fecha <b> '.$dates.' </b>, emitido por el '.$_POST['emitido'].', dentro de los autos del juicio de <b>Amparo '.$_POST['juicio'].'</b> Promovido por '.$_POST['promovido'].', en contra de actos de esta Delegación, me permito informarle que esta jefatura de Departamneto es conocedora a partir de la notificación, lo cual imposibilita poder cumplir en el termino que nos establece, <b>debido a que no contamos con escrito petitorio mismo que es requisito indispensable para efectuar el cumplimiento requerido, razón por la cual se solicita subsane y facilite los documentos necesarios para dar cumplimiento a lo solicitado</b>.</h3>
     
     
        
</table>        

<br>
<br>

<table style="width:100%">
<tr>
<td style="text-align:justify">
<h3 style="font-weight:1px">En mérito de lo anterior me permito requerir a la Unidad Jurídica que dignamente dirige y en el ámbito de sus atribuciones, solicite ante la autoridad judicial y/o administrativa correspondiente, el escrito petitorio, asi como un término prudente, a fin de estar en posibilidades de que se efectuen las acciones correspondientes.</h3>
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
<BR>
<H5 style="font-weight:1px" ALIGN="LEFT" top="200">Realiza:<BR> '.$campo['nombre'].'<BR>

 
 '.$campo['cargo'].' 


</H5>

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
