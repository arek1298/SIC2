<?php 

if(isset($_POST['buscar'])){

    if(empty($_POST['folio'])){
        echo'<script type="text/javascript">
        alert("Rellene el campo folio");
        window.location.href="responder.php";
        </script>';
    }else{
        $folio=$_POST['folio'];
    
        $resultado=$cnx->query("SELECT EXISTS (SELECT * FROM correspondencia WHERE folio='$folio');");
        $row=mysqli_fetch_row($resultado);
        
            if ($row[0]=="1") {                 
        
                $sql="SELECT * FROM correspondencia WHERE folio='$folio'" ;
                $registro=mysqli_query($cnx,$sql);
                
                $campo=mysqli_fetch_array($registro);

                echo'<script type="text/javascript">
alert("Se trabajará el oficio"+" "+"'.$folio.'"+" "+"por el usuario"+" "+"'.$hola.'");
window.location.href="respuesta.php?folio='.$folio.'";
</script>';
   
                
            }else{
                echo'<script type="text/javascript">
                alert("El folio"+" "+"'.$_POST['folio'].'"+" "+  "no existe en la base de datos ");
                window.location.href="responder.php";
                </script>';
            }   
        
    }
    }



   

?>