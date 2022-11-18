<?php
include 'conexion.php';

if(isset($_POST['buscar'])){
    $fecha=$_POST['buscar'];

    unset($registro);
$no="Aun no es trabajado";
						$sql="SELECT * FROM respuesta WHERE fecha  LIKE '%$fecha%' or tema LIKE '%$fecha%'or folio LIKE '%$fecha%'or dep LIKE '%$fecha%'or servicio LIKE '%$fecha%' or correspondencia LIKE '%$fecha%' or solicita LIKE '%$fecha%' or asigno LIKE '%$fecha%'  ORDER BY id DESC"; 

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
								<td><?php echo $campo['solicita'];?></td>
								<td><?php echo $campo['tema'];?></td>
                                <td><?php echo $campo['asigno'];?></td>
                                <td><?php echo $campo['fecha'];?></td>
								<td><?php echo $campo['fechaOficio'];?></td>
                                <td><?php 
                        
                                    echo $campo['trabajado'];
                                ?></td>
                                
                                
                            
							</tr>
							<?php
                            
						}
                    }else{

                    
                
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
                                <td><?php echo $campo['solicita'];?></td>
                                <td><?php echo $campo['tema'];?></td>
                                <td><?php echo $campo['asigno'];?></td>
                                <td><?php echo $campo['fecha'];?></td>
                                <td><?php echo $campo['fechaOficio'];?></td>
                                <td><?php  echo $campo['trabajado']?></td>
                    
                            
            </tr>
                          
                        
                        </tr>
                    
                        <?php
                    }
                }
            
              
                
						?>