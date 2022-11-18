<?php
include 'conexion.php';





if(isset($_POST['buscar'])){
    $fecha=$_POST['buscar'];

    unset($registro);
$no="Aun no es trabajado";
 $name='PDF';
						$sql="SELECT * FROM respuesta WHERE (tipo='$name') AND (folio  LIKE '%$fecha%' or nombreRespuesta LIKE '%$fecha%'or fechaRespuesta LIKE '%$fecha%'or descripcion LIKE '%$fecha%'or archivoRespuesta LIKE '%$fecha%' or tipo LIKE '%$fecha%')  ORDER BY minutario DESC";

						$registro=mysqli_query($cnx,$sql);
					while($campo=mysqli_fetch_array($registro))
						{
                
			?>
							    <tr style="background-color: <?php  if ($campo['tipo']=='PDF') {
                                    echo "#CAFFE8 ";
                                }else{ echo "white" ;} ?>;" >
                                
                                <td><?php echo $campo['tipo'];?></td>
                                <td><?php echo $campo['fechaRespuesta'];?></td>
                                <td><?php echo $campo['folio'];?></td>
                                <td><?php echo $campo['descripcion'];?></td>
                                <td><?php echo $campo['nombreRespuesta'];?></td>
                             <td>
                                
                                <?php 
                                if ($campo['tipo']=='PDF') {
                                    $id=$campo['archivoRespuesta'];
                                    $redireccion="pdfsElaborados/".$id.".pdf";
                                    $a= " <a href='$redireccion' style='border:none; background-image: url(img/pdf.png); background-repeat: no-repeat;  width: 64px; height:64px; background-color: transparent !important;' target='_BLANK' >  </a>";
                                echo $a;

                                }


                                ?>
                             </td>
                               <td>
                                <form method="post" action="php/editarPdf.php" target="_blank">
                                    <input type="hidden" name="id" value="<?php echo $campo['minutario'] ;?>">
                                    <input type="hidden" name="tipo" value="<?php echo $campo['tipo']; ?>">
                                    <input type="hidden" name="descripcion" value="<?php echo $campo['descripcion']; ?>" >
                                 <button style="width:64px; height: 64px; background-image: url(img/editar64.png); background-repeat:no-repeat; background-color:transparent;border: none;" type="submit">
                                    </form>

                             </td>
                    
                            
            </tr>
							<?php
                            
						}
                    }else{

                    
                $name='PDF';
                    $sql="SELECT * FROM respuesta WHERE tipo='$name' ORDER BY minutario DESC ";
                    $registro=mysqli_query($cnx,$sql);       
                    
            

                    while($campo=mysqli_fetch_array($registro))
                    {

                        ?>
                                <tr style="background-color: <?php  if ($campo['tipo']=='PDF') {
                                    echo "#CAFFE8 ";
                                }else{ echo "white" ;} ?>;" >
                                
                      <td><?php echo $campo['tipo'];?></td>
                                <td><?php echo $campo['fechaRespuesta'];?></td>
                                <td><?php echo $campo['folio'];?></td>
                                <td><?php echo $campo['descripcion'];?></td>
                                <td><?php echo $campo['nombreRespuesta'];?></td>
                                      <td>
                                
                                <?php 
                                if ($campo['tipo']=='PDF') {
                                    $id=$campo['archivoRespuesta'];
                                    $redireccion="pdfsElaborados/".$id.".pdf";
                                    $a= " <a href='$redireccion' style='border:none; background-image: url(img/pdf.png); background-repeat: no-repeat;  width: 64px; height:64px; background-color: transparent !important;' target='_BLANK' >  </a>";
                                echo $a;

                                }


                                ?>
                             </td>
                             <td>
                                <form method="post" action="php/editarPdf.php" target="_blank">
                                    <input type="hidden" name="id" value="<?php echo $campo['minutario'] ;?>">
                                    <input type="hidden" name="tipo" value="<?php echo $campo['tipo']; ?>">
                                    <input type="hidden" name="descripcion" value="<?php echo $campo['descripcion']; ?>" >
                                 <button style="width:64px; height: 64px; background-image: url(img/editar64.png); background-repeat:no-repeat; background-color:transparent;border: none;" type="submit">
                                    </form>

                             </td>
                    
                            
            </tr>
                          
                        
                        </tr>
                    
                        <?php
                    }
                }
            
              
                
						?>