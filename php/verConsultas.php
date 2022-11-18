<?php
include 'conexion.php';

if(isset($_POST['buscar'])){
    $fecha=$_POST['buscar'];

    unset($registro);
$no="Aun no es trabajado";
						$sql="SELECT * FROM correspondencia WHERE tema LIKE '%$fecha%'or folio LIKE '%$fecha%'or dep LIKE '%$fecha%'or servicio LIKE '%$fecha%'  or solicita LIKE '%$fecha%'  ORDER BY id DESC";

						$registro=mysqli_query($cnx,$sql);
                    
                
						while($campo=mysqli_fetch_array($registro))
						{ 

                
			?>
							     <tr >
                                
                                <td><?php echo $campo['servicio'];?></td>
                                <td><?php echo $campo['folio'];?></td>
                                <td><?php echo $campo['solicita'];?></td>
                                <td><?php echo $campo['tema'];?></td>


                                <td><?php echo $campo['archivo'];;?></td>

                               
                                <td><?php echo $campo['trabajado'];?></td>
                                <?php 
                                $sql3="SELECT * FROM respuesta WHERE folio='$campo[folio]'";
                                $registro3=mysqli_query($cnx,$sql3);
                                $respuesta=mysqli_fetch_array($registro3);

                                if (empty($respuesta['descripcion'])) {
                                    $descripcion="";
                                }else{
                                    $descripcion=$respuesta['descripcion'];
                                }


                                if (empty($respuesta['archivoRespuesta'])) {
                                    $pdfRespuesta="";
                                }else{
                                     $pdfRespuesta=$respuesta['archivoRespuesta'];
                                }


                                                      
                                if (empty($respuesta['fechaRespuesta'])) {
                                    $fechaRespuesta="";
                                }else{
                                     $fechaRespuesta=$respuesta['fechaRespuesta'];
                                }



                                    if (empty ($campo['archivo']) AND empty($respuesta['archivoRespuesta'])) {
                                        $a="no hay pdfs";
                                    }else{

                                        

                                        $a= " <a href='php/archivo.php?id=$campo[folio]' style='border:none; background-image: url(img/pdf.png); background-repeat: no-repeat;  width: 64px; height:64px; background-color: transparent !important;'  >  </a>";
                                    }


                                ?>                              
                                <td><?php echo $fechaRespuesta?></td> 
                                <td><?php echo $descripcion ?></td>
                                <td><?php echo $pdfRespuesta ?></td>
                                <td><?php echo $a ?></td>
                            
                            </tr>
                          
                   
							<?php
                            
						}
                    }else{

                    
                
                    $sql="SELECT * FROM correspondencia ORDER BY id DESC ";
                    $registro=mysqli_query($cnx,$sql);       
                    
            

                    while($campo=mysqli_fetch_array($registro))
                    {

                        ?>
                        <tr >
                                
                                <td><?php echo $campo['servicio'];?></td>
                                <td><?php echo $campo['folio'];?></td>
                                <td><?php echo $campo['solicita'];?></td>
                                <td><?php echo $campo['tema'];?></td>

                                <?php  if (empty($campo['archivo'])) {
                                    $archivos="";
                                }else{
                                    $archivos=$campo['archivo'];
                                }  ?>

                                <td><?php echo $archivos;?></td>

                                 <?php  if (empty($campo['trabajado'])) {
                                    $trabajado="";
                                }else{
                                    $trabajado=$campo['trabajado'];
                                }  ?>
                                <td><?php echo $trabajado;?></td>
                                <?php 
                                $sql3="SELECT * FROM respuesta WHERE folio='$campo[folio]'";
                                $registro3=mysqli_query($cnx,$sql3);
                                $respuesta=mysqli_fetch_array($registro3);

                                if (empty($respuesta['descripcion'])) {
                                    $descripcion="";
                                }else{
                                    $descripcion=$respuesta['descripcion'];
                                }


                                if (empty($respuesta['archivoRespuesta'])) {
                                    $pdfRespuesta="";
                                }else{
                                     $pdfRespuesta=$respuesta['archivoRespuesta'];
                                }


                                                      
                                if (empty($respuesta['fechaRespuesta'])) {
                                    $fechaRespuesta="";
                                }else{
                                     $fechaRespuesta=$respuesta['fechaRespuesta'];
                                }



                                    if (empty ($campo['archivo']) AND empty($respuesta['archivoRespuesta'])) {
                                        $a="no hay pdfs";
                                    }else{

                                        

                                        $a= " <a href='php/archivo.php?id=$campo[folio]' style='border:none; background-image: url(img/pdf.png); background-repeat: no-repeat;  width: 64px; height:64px; background-color: transparent !important;'  >  </a>";
                                    }


                                ?>                              
                                <td><?php echo $fechaRespuesta?></td> 
                                <td><?php echo $descripcion ?></td>
                                <td><?php echo $pdfRespuesta ?></td>
                                <td><?php echo $a ?></td>
                            
                            </tr>
                          
                        
                   
                    
                        <?php
                    }
                }
            
              
                
						?>