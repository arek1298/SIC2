<?php
include 'conexion.php';

if(isset($_POST['buscar'])){
    $fecha=$_POST['buscar'];

    unset($registro);

						$sql="SELECT * FROM correspondencia WHERE fecha  LIKE '%$fecha%' or tema LIKE '%$fecha%'or folio LIKE '%$fecha%'or dep LIKE '%$fecha%'or servicio LIKE '%$fecha%' or correspondencia LIKE '%$fecha%' ORDER BY id DESC";
						$registro=mysqli_query($cnx,$sql);
                    
						while($campo=mysqli_fetch_array($registro))
						{

							?>
							<tr >
								
                         
<td><?php echo $campo['folio'];?></td>  
                         
<td><?php echo $campo['servicio'];?></td>
                            <td><?php echo $campo['fechaOficio'];?></td>
                            <td><?php echo $campo['solicita'];?></td>
                            <td><?php echo $campo['dep'];?></td>
                            <td><?php echo $campo['tema'];?></td>
                            
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
                               
                        <td><?php echo $campo['folio'];?></td>  
<td><?php echo $campo['servicio'];?></td>
                            <td><?php echo $campo['fechaOficio'];?></td>
                            <td><?php echo $campo['solicita'];?></td>
                            <td><?php echo $campo['dep'];?></td>
                            <td><?php echo $campo['tema'];?></td>
            </tr>
                          
                        
                        </tr>
                    
                        <?php
                    }
                }
						?>


                          