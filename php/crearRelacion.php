<?php
include 'conexion.php';
include 'agregar.php';    

                            
                    $sql="SELECT * FROM enviar ORDER BY id DESC ";
                    $registro=mysqli_query($cnx,$sql);                
                    while($campo=mysqli_fetch_array($registro))
                    {

                        ?>
                        <tr >
                            <td><?php echo $campo['clave'];?></td>
                            <td><?php echo $campo['oficio1'];?><br><?php echo $campo['oficio2'];?>
                            <?php echo $campo['oficio3'];?><br><?php echo $campo['oficio4'];?>
                            <?php echo $campo['oficio5'];?></td>
                            <form method="post">
                            <td>
                            <input type="hidden" name="clave"   value="<?php echo $campo['clave'] ?>">
                            <input type="hidden" name="nombre"  value="<?php echo $campo['nombre'] ?>">
                            <input type="hidden" name="direccion"   value="<?php echo $campo['direccion'] ?>">
                            <input type="hidden" name="ciudad"   value="<?php echo $campo['ciudad'] ?>">
                            <input type="hidden" name="oficio1" value="<?php echo $campo['oficio1'] ?>">
                            <input type="hidden" name="oficio2" value="<?php echo $campo['oficio2'] ?>">
                            <input type="hidden" name="oficio3" value="<?php echo $campo['oficio3'] ?>">
                            <input type="hidden" name="oficio4" value="<?php echo $campo['oficio4'] ?>">
                            <input type="hidden" name="oficio5" value="<?php echo $campo['oficio5'] ?>">
                            <input type="hidden" name="oficio6" value="<?php echo $campo['oficio6'] ?>">
                            <input type="hidden" name="oficio7" value="<?php echo $campo['oficio7'] ?>">
                            <input type="hidden" name="oficio8" value="<?php echo $campo['oficio8'] ?>">
                            <input type="hidden" name="oficio9" value="<?php echo $campo['oficio9'] ?>">
                            <input type="hidden" name="oficio10" value="<?php echo $campo['oficio10'] ?>">
                            <input type="hidden" name="oficio11" value="<?php echo $campo['oficio11'] ?>">
                            <input type="hidden" name="oficio12" value="<?php echo $campo['oficio12'] ?>">
                            <input type="hidden" name="oficio13" value="<?php echo $campo['oficio13'] ?>">
                            <input type="hidden" name="oficio14" value="<?php echo $campo['oficio14'] ?>">
                            <input type="hidden" name="oficio15" value="<?php echo $campo['oficio15'] ?>">
                            <input type="hidden" name="oficio16" value="<?php echo $campo['oficio16'] ?>">
                            <input type="hidden" name="oficio17" value="<?php echo $campo['oficio17'] ?>">
                            <input type="hidden" name="oficio18" value="<?php echo $campo['oficio19'] ?>">
                            <input type="hidden" name="oficio19" value="<?php echo $campo['oficio19'] ?>">
                            <input type="hidden" name="oficio20" value="<?php echo $campo['oficio20'] ?>">

                            
                            <button name="registrar" value="agregar" id="boton" >Agregar</button>
                        </td>
                         
                            </form>
                        </tr>
                    
                        <?php
                    }


             
			
                           
                           ?>
