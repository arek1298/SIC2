<?php


setlocale(LC_ALL,"es_MX.utf8"); 

session_start();
include '../php/conexion.php';
$diassemana = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
 
$date3= $diassemana[date('w')]." ".date('d')." de ".$meses[date('n')-1]. " del ".date('Y') ;
$hiy=date('d/m/y');


$fecha=$_POST['fecha'];
$date= explode("-", $fecha);
$dia=intval($date[2]);
$mes=intval($date[1]);
$dates= $dia." de ".$meses[$mes-1]. " del ".$date[0] ;


$fecha2=$_POST['fecha2'];
$date2= explode("-", $fecha2);
$dia2=intval($date2[2]);
$mes2=intval($date2[1]);
$dates2= $dia2." de ".$meses[$mes2-1]. " del ".$date2[0] ;




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


$folio="SP/DPSH/NJ/".$minutario."/2021";

$oficio="NOTIFICACION A JURIDICO";




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
<td ALIGN="right" WIDTH="100%" style="margin-left:10px"><H4>'.$folio.'</H4> <H4 STYLE="font-weight:1px"> Saltillo, Coahuila  '.$date3.'</H4> <BR> </td>
</tr>

</table>

<br>
<table  width="100%"  border="0" cellpadding="0" cellspacing="0">
  <tbody>
    <tr>
      
        <td>  <h3>C. LIC. ELISA MARIA NELSON ESCOBEDO.<br>
        JEFE DE LA UNIDAD JURIDICA DEL ISSSTE EN COAHUILA<BR>
             E D I F I C I O<br>
        
        </h3> <BR> 
        <table>
        <tr>
        <td style="text-align:justify">
        <H3 style="font-weight:2px ; text-align:justify">En atención a su oficio <b>No. '.$_POST['OJ'].'</b>, recibido en el Departamento de Pensiones Seguridad e Higiene en fecha <b>'.$dates.'</b>,
       por medio del cual se requiere rendir informe del cumplimiento a la <b>sentencia de fecha <b> '.$dates.'</b>  emitida  por la '.$_POST['emitida'].', en los autos del expediente número '.$_POST['numex'].'</b>
        ,</b>promovido por  <b> '.$_POST['nomP'].', R.F.C. '.$_POST['rfc'].', No de Pensión '.$_POST['numP'].'
        ,</b> en contra de actos de esta Delegación en Coahuila, me permito informar lo siguiente:
        <br>
        <br>
          Se anexa la resolución original <b> No. '.$_POST['orp'].'</b> de fecha <b> '.$dates2.'</b>, del presente en el que se da resolución conforme a los lineamientos de sentencia.
          <br>
          <br>
          Es menester precisar, que la resolución de mérito se elaboró en atención y con estricto apego al escrito petitorio del quejoso y la sentencia emitida por la autoridad juridiccional; en tal virtud, se llevó a cabo el cálculo y de ser el caso la Subdelegación de Administración debrá emitir y pagar el cheque que corresponda.
          <br>
          <br>
          Así las cosas y en atención a lo establecido en las fracciones I y II del artículo 42 del Reglamento Orgánico de las Delegaciones Estatales y Regionales del ISSSTE, mismas que consignan la atribución de esa Unidad Jurídica y su Titular o Encargado de representar legalmente al Instituto y a los servidores públicos de esta Oficina de Representación Estatal, respetuosamente remito tal documento a su atención a efecto de que ejerza sus facultades de revisión y asesoría para que, en el caso de que la multicitada resolución no sea acorde a lo requerido por la autoridad, tal circunstancia sea notificada por escrito a este Departamento para su inmediata corrección o cancelación. En caso contrario, deberá ser enviada a la autoridad competente como parte de la totalidad de los trámites inherente al presente juicio.
          <br>
          <br>
          Sin otro en particular y esperando reciba de conformidad, reitero a usted la seguridad de mi atenta aprovecho la ocasión para enviarle un cordial saludo.

        </td>
        </tr>
        </table>


       
      

<h3 style="font-weight:1px" >	  
<br> 

</h3>




        
</table>



<h3 ALIGN="left">ATENTAMENTE</h3>
<br>
<h3 ALIGN="left">'.$personal['nombre'].' <BR> '.$personal['cargo'].' <BR>  </h3> 
<BR>
<H5 style="font-weight:1px" ALIGN="LEFT" top="200">Realiza:<BR> '.$campo['nombre'].'<BR>

 
 '.$campo['cargo'].' 


</H5>




<P ALIGN="center">Guadalupe victoria #416, Zona Centro, Saltillo, Coahuila,C.P 25000, Tel:(844) 4389898 www.gob.mx/issste</p>

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


