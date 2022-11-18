 <?php
include 'conexion.php';

if(isset($_POST['buscar'])){
    $fecha=$_POST['buscar'];

    unset($registro);
$no="Aun no es trabajado";
						$sql="SELECT * FROM correspondencia WHERE fecha  LIKE '%$fecha%' or tema LIKE '%$fecha%'or folio LIKE '%$fecha%'or dep LIKE '%$fecha%'or servicio LIKE '%$fecha%' or correspondencia LIKE '%$fecha%' or solicita LIKE '%$fecha%' or asigno LIKE '%$fecha%'  ORDER BY id DESC";

						$registro=mysqli_query($cnx,$sql);
                    
                
						while($campo=mysqli_fetch_array($registro))
						{
                
			?>
							<tr  style="background-color: <?php if ($campo['trabajado']=='si') {
                                echo '#AFF77E';
                            }else {
                                echo 'white';
                            } ?>;">
                                
                      
								<td><?php echo $campo['correspondencia'];?></td>
								<td><?php echo $campo['servicio'];?></td>
								<td><?php echo $campo['folio'];?></td>
								<td><?php echo $campo['dep'];?></td>
							<td style="text-align:left"><?php echo $campo['solicita'];?></td>
                                <td style="text-align:left" ><?php echo $campo['tema'];?></td>
                                <td style="text-align:left"><?php echo $campo['asigno'];?></td>
                                <td><?php echo $campo['fecha'];?></td>
								
               <?php 
if ($campo['trabajado']=='si') {
     $a= " <a href='php/archivo.php?id=$campo[folio]' style='border:none; background-image: url(img/analizar32.png); background-repeat: no-repeat;  width: 32px; height:32px; background-color: transparent !important;'  >  </a>";


}else if ($campo['trabajado']==' ' AND empty($campo['archivo']) ){

$a='No contiene respuesta o documento';
}
else if ($campo['trabajado']==' ' AND !empty($campo['archivo']) ){

$a= " <a href='forms/pdfs/$campo[archivo]' style='border:none; background-image: url(img/pdf32.png); background-repeat: no-repeat;  width: 32px; height:32px; background-color: transparent !important;' target='_BLANK' >  </a>";

}
else{
    $a="";
}

               ?>
                                <td ><?php  echo $a?></td>
                                
                                
                            
							</tr>
							<?php
                            
						}
                    }

          else if (isset($_POST['interna'])) {
                    $campo="";
                    $name="Interna";
                    $sql="SELECT * FROM correspondencia WHERE correspondencia='$name' ORDER BY id DESC";
                    $registro=mysqli_query($cnx,$sql);
                     while($campo=mysqli_fetch_array($registro))
                    {

                        ?>
                        <tr  style="background-color: <?php if ($campo['trabajado']=='si') {
                                echo '#AFF77E';
                            }else{
                                echo 'white';
                            } ?>;">
                                
                                <td><?php echo $campo['correspondencia'];?></td>
                                <td><?php echo $campo['servicio'];?></td>
                                <td><?php echo $campo['folio'];?></td>
                                <td><?php echo $campo['dep'];?></td>
                               <td style="text-align:left"><?php echo $campo['solicita'];?></td>
                                <td style="text-align:left" ><?php echo $campo['tema'];?></td>
                                <td style="text-align:left"><?php echo $campo['asigno'];?></td>
                                <td><?php echo $campo['fecha'];?></td>
                                
               <?php 
if ($campo['trabajado']=='si') {
     $a= " <a href='php/archivo.php?id=$campo[folio]' style='border:none; background-image: url(img/analizar32.png); background-repeat: no-repeat;  width: 32px; height:32px; background-color: transparent !important;'  >  </a>";


}else if ($campo['trabajado']==' ' AND empty($campo['archivo']) ){

$a='No contiene respuesta o documento';
}
else if ($campo['trabajado']==' ' AND !empty($campo['archivo']) ){

$a= " <a href='forms/pdfs/$campo[archivo]' style='border:none; background-image: url(img/pdf32.png); background-repeat: no-repeat;  width: 32px; height:32px; background-color: transparent !important;' target='_BLANK' >  </a>";

}
else{
    $a="";
}

               ?>
                                <td ><?php  echo $a?></td>
                    
                            
            </tr>
                        <?php
                    }
                }
            
              

else if (isset($_POST['externa'])) {
                    $campo="";
                    $name="Externa";
                    $sql="SELECT * FROM correspondencia WHERE correspondencia='$name' ORDER BY id DESC";
                    $registro=mysqli_query($cnx,$sql);
                     while($campo=mysqli_fetch_array($registro))
                    {

                        ?>
                        <tr  style="background-color: <?php if ($campo['trabajado']=='si') {
                                echo '#AFF77E';
                            }else{
                                echo 'white';
                            } ?>;">
                                
                                <td><?php echo $campo['correspondencia'];?></td>
                                <td><?php echo $campo['servicio'];?></td>
                                <td><?php echo $campo['folio'];?></td>
                                <td><?php echo $campo['dep'];?></td>
                               <td style="text-align:left"><?php echo $campo['solicita'];?></td>
                                <td style="text-align:left" ><?php echo $campo['tema'];?></td>
                                <td style="text-align:left"><?php echo $campo['asigno'];?></td>
                                <td><?php echo $campo['fecha'];?></td>
                                
                                
               <?php 
if ($campo['trabajado']=='si') {
     $a= " <a href='php/archivo.php?id=$campo[folio]' style='border:none; background-image: url(img/analizar32.png); background-repeat: no-repeat;  width: 32px; height:32px; background-color: transparent !important;'  >  </a>";


}else if ($campo['trabajado']==' ' AND empty($campo['archivo']) ){

$a='No contiene respuesta o documento';
}
else if ($campo['trabajado']==' ' AND !empty($campo['archivo']) ){

$a= " <a href='forms/pdfs/$campo[archivo]' style='border:none; background-image: url(img/pdf32.png); background-repeat: no-repeat;  width: 32px; height:32px; background-color: transparent !important;' target='_BLANK' >  </a>";

}
else{
    $a="";
}

               ?>
                                <td ><?php  echo $a?></td>
                    
                            
            </tr>
                        <?php
                    }
                }
            
              




else if (isset($_POST['servicio'])) {
                    $campo="";
                    $name="Servicios";
                    $sql="SELECT * FROM correspondencia WHERE servicio='$name' ORDER BY id DESC";
                    $registro=mysqli_query($cnx,$sql);
                     while($campo=mysqli_fetch_array($registro))
                    {

                        ?>
                        <tr  style="background-color: <?php if ($campo['trabajado']=='si') {
                                echo '#AFF77E';
                            }else{
                                echo 'white';
                            } ?>;">
                                
                                <td><?php echo $campo['correspondencia'];?></td>
                                <td><?php echo $campo['servicio'];?></td>
                                <td><?php echo $campo['folio'];?></td>
                                <td><?php echo $campo['dep'];?></td>
                               <td style="text-align:left"><?php echo $campo['solicita'];?></td>
                                <td style="text-align:left" ><?php echo $campo['tema'];?></td>
                                <td style="text-align:left"><?php echo $campo['asigno'];?></td>
                                <td><?php echo $campo['fecha'];?></td>
                                
                                
               <?php 
if ($campo['trabajado']=='si') {
     $a= " <a href='php/archivo.php?id=$campo[folio]' style='border:none; background-image: url(img/analizar32.png); background-repeat: no-repeat;  width: 32px; height:32px; background-color: transparent !important;'  >  </a>";


}else if ($campo['trabajado']==' ' AND empty($campo['archivo']) ){

$a='No contiene respuesta o documento';
}
else if ($campo['trabajado']==' ' AND !empty($campo['archivo']) ){

$a= " <a href='forms/pdfs/$campo[archivo]' style='border:none; background-image: url(img/pdf32.png); background-repeat: no-repeat;  width: 32px; height:32px; background-color: transparent !important;' target='_BLANK' >  </a>";

}
else{
    $a="";
}

               ?>
                                <td ><?php  echo $a?></td>
                    
                            
            </tr>
                        <?php
                    }
                }
            
              

else if (isset($_POST['seguridad'])) {
                    $campo="";
                    $name="Seguridad e Higiene";
                    $sql="SELECT * FROM correspondencia WHERE servicio='$name' ORDER BY id DESC";
                    $registro=mysqli_query($cnx,$sql);
                     while($campo=mysqli_fetch_array($registro))
                    {

                        ?>
                        <tr  style="background-color: <?php if ($campo['trabajado']=='si') {
                                echo '#AFF77E';
                            }else{
                                echo 'white';
                            } ?>;">
                                
                                <td><?php echo $campo['correspondencia'];?></td>
                                <td><?php echo $campo['servicio'];?></td>
                                <td><?php echo $campo['folio'];?></td>
                                <td><?php echo $campo['dep'];?></td>
                                <td style="text-align:left"><?php echo $campo['solicita'];?></td>
                                <td style="text-align:left" ><?php echo $campo['tema'];?></td>
                                <td style="text-align:left"><?php echo $campo['asigno'];?></td>
                                <td><?php echo $campo['fecha'];?></td>
                                
                                
               <?php 
if ($campo['trabajado']=='si') {
     $a= " <a href='php/archivo.php?id=$campo[folio]' style='border:none; background-image: url(img/analizar32.png); background-repeat: no-repeat;  width: 32px; height:32px; background-color: transparent !important;'  >  </a>";


}else if ($campo['trabajado']==' ' AND empty($campo['archivo']) ){

$a='No contiene respuesta o documento';
}
else if ($campo['trabajado']==' ' AND !empty($campo['archivo']) ){

$a= " <a href='forms/pdfs/$campo[archivo]' style='border:none; background-image: url(img/pdf32.png); background-repeat: no-repeat;  width: 32px; height:32px; background-color: transparent !important;' target='_BLANK' >  </a>";

}
else{
    $a="";
}

               ?>
                                <td ><?php  echo $a?></td>
                    
                            
            </tr>
                        <?php
                    }
                }
            
else if (isset($_POST['cumplimiento'])) {
                    $campo="";
                    $name="Cumplimiento de sentencia";
                    $sql="SELECT * FROM correspondencia WHERE servicio='$name' ORDER BY id DESC";
                    $registro=mysqli_query($cnx,$sql);
                     while($campo=mysqli_fetch_array($registro))
                    {

                        ?>
                        <tr  style="background-color: <?php if ($campo['trabajado']=='si') {
                                echo '#AFF77E';
                            }else{
                                echo 'white';
                            } ?>;">
                                
                                <td><?php echo $campo['correspondencia'];?></td>
                                <td><?php echo $campo['servicio'];?></td>
                                <td><?php echo $campo['folio'];?></td>
                                <td><?php echo $campo['dep'];?></td>
                               <td style="text-align:left"><?php echo $campo['solicita'];?></td>
                                <td style="text-align:left" ><?php echo $campo['tema'];?></td>
                                <td style="text-align:left"><?php echo $campo['asigno'];?></td>
                                <td><?php echo $campo['fecha'];?></td>
                                
                                
               <?php 
if ($campo['trabajado']=='si') {
     $a= " <a href='php/archivo.php?id=$campo[folio]' style='border:none; background-image: url(img/analizar32.png); background-repeat: no-repeat;  width: 32px; height:32px; background-color: transparent !important;'  >  </a>";


}else if ($campo['trabajado']==' ' AND empty($campo['archivo']) ){

$a='No contiene respuesta o documento';
}
else if ($campo['trabajado']==' ' AND !empty($campo['archivo']) ){

$a= " <a href='forms/pdfs/$campo[archivo]' style='border:none; background-image: url(img/pdf32.png); background-repeat: no-repeat;  width: 32px; height:32px; background-color: transparent !important;' target='_BLANK' >  </a>";

}
else{
    $a="";
}

               ?>
                                <td ><?php  echo $a?></td>
                    
                            
            </tr>
                        <?php
                    }
                }

                else if (isset($_POST['medicina'])) {
                    $campo="";
                    $name="Medicina del trabajo";
                    $sql="SELECT * FROM correspondencia WHERE servicio='$name' ORDER BY id DESC";
                    $registro=mysqli_query($cnx,$sql);
                     while($campo=mysqli_fetch_array($registro))
                    {

                        ?>
                        <tr  style="background-color: <?php if ($campo['trabajado']=='si') {
                                echo '#AFF77E';
                            }else{
                                echo 'white';
                            } ?>;">
                                
                                <td><?php echo $campo['correspondencia'];?></td>
                                <td><?php echo $campo['servicio'];?></td>
                                <td><?php echo $campo['folio'];?></td>
                                <td><?php echo $campo['dep'];?></td>
                                <td style="text-align:left"><?php echo $campo['solicita'];?></td>
                                <td style="text-align:left" ><?php echo $campo['tema'];?></td>
                                <td style="text-align:left"><?php echo $campo['asigno'];?></td>
                                <td><?php echo $campo['fecha'];?></td>
                                
                                
               <?php 
if ($campo['trabajado']=='si') {
     $a= " <a href='php/archivo.php?id=$campo[folio]' style='border:none; background-image: url(img/analizar32.png); background-repeat: no-repeat;  width: 32px; height:32px; background-color: transparent !important;'  >  </a>";


}else if ($campo['trabajado']==' ' AND empty($campo['archivo']) ){

$a='No contiene respuesta o documento';
}
else if ($campo['trabajado']==' ' AND !empty($campo['archivo']) ){

$a= " <a href='forms/pdfs/$campo[archivo]' style='border:none; background-image: url(img/pdf32.png); background-repeat: no-repeat;  width: 32px; height:32px; background-color: transparent !important;' target='_BLANK' >  </a>";

}
else{
    $a="";
}

               ?>
                                <td ><?php  echo $a?></td>
                    
                            
            </tr>
                        <?php
                    }
                }
            
 else if (isset($_POST['asignados'])) {
    $userr=$_SESSION['usuario'];
                    $sqlname="SELECT nombre FROM members WHERE usuario='$userr'";
                    $registro=mysqli_query($cnx,$sql);
                    $campo=mysqli_fetch_array($registro);
                    $name=$campo['nombre'];
                    $sql="SELECT * FROM correspondencia WHERE asigno='$name' ORDER BY id DESC";
                    $registro=mysqli_query($cnx,$sql);
                     while($campo=mysqli_fetch_array($registro))
                    {

                        ?>
                        <tr  style="background-color: <?php if ($campo['trabajado']=='si') {
                                echo '#AFF77E';
                            }else{
                                echo 'white';
                            } ?>;">
                                
                                <td><?php echo $campo['correspondencia'];?></td>
                                <td><?php echo $campo['servicio'];?></td>
                                <td><?php echo $campo['folio'];?></td>
                                <td><?php echo $campo['dep'];?></td>
                                <td style="text-align:left"><?php echo $campo['solicita'];?></td>
                                <td style="text-align:left" ><?php echo $campo['tema'];?></td>
                                <td style="text-align:left"><?php echo $campo['asigno'];?></td>
                                <td><?php echo $campo['fecha'];?></td>
                                
                                
               <?php 
if ($campo['trabajado']=='si') {
     $a= " <a href='php/archivo.php?id=$campo[folio]' style='border:none; background-image: url(img/analizar32.png); background-repeat: no-repeat;  width: 32px; height:32px; background-color: transparent !important;'  >  </a>";


}else if ($campo['trabajado']==' ' AND empty($campo['archivo']) ){

$a='No contiene respuesta o documento';
}
else if ($campo['trabajado']==' ' AND !empty($campo['archivo']) ){

$a= " <a href='forms/pdfs/$campo[archivo]' style='border:none; background-image: url(img/pdf32.png); background-repeat: no-repeat;  width: 32px; height:32px; background-color: transparent !important;' target='_BLANK' >  </a>";

}
else{
    $a="";
}

               ?>
                                <td ><?php  echo $a?></td>
                    
                            
            </tr>
                        <?php
                    }
                }
            
              


              




              













                    else{

                    
                
                    $sql="SELECT * FROM correspondencia ORDER BY id DESC ";
                    $registro=mysqli_query($cnx,$sql);       
                    
            

                    while($campo=mysqli_fetch_array($registro))
                    {

                        ?>
                        <tr  style="background-color: <?php if ($campo['trabajado']=='si') {
                                echo '#AFF77E';
                            }else{
                                echo 'white';
                            } ?>;">
                                
                                <td><?php echo $campo['correspondencia'];?></td>
                                <td><?php echo $campo['servicio'];?></td>
                                <td><?php echo $campo['folio'];?></td>
                                <td><?php echo $campo['dep'];?></td>
                                <td style="text-align:left"><?php echo $campo['solicita'];?></td>
                                <td style="text-align:left" ><?php echo $campo['tema'];?></td>
                                <td style="text-align:left"><?php echo $campo['asigno'];?></td>
                                <td><?php echo $campo['fecha'];?></td>
               

               <?php 
if ($campo['trabajado']=='si') {
     $a= " <a href='php/archivo.php?id=$campo[folio]' style='border:none; background-image: url(img/analizar32.png); background-repeat: no-repeat;  width: 32px; height:32px; background-color: transparent !important;'  >  </a>";


}else if ($campo['trabajado']==' ' AND empty($campo['archivo']) ){

$a='No contiene respuesta o documento';
}
else if ($campo['trabajado']==' ' AND !empty($campo['archivo']) ){

$a= " <a href='forms/pdfs/$campo[archivo]' style='border:none; background-image: url(img/pdf32.png); background-repeat: no-repeat;  width: 32px; height:32px; background-color: transparent !important;' target='_BLANK' >  </a>";

}
else{
    $a="";
}

               ?>
                                <td ><?php  echo $a?></td>
                    
                            
            </tr>
                          
                        
                        </tr>
                    
                        <?php
                    }
                }



                
						?>