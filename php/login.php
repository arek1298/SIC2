<?php
ob_start() ;
?>

<?php

# Se creao una sesión
session_start();

# Se manda llamar el archivo de conexión
include 'php/conexion.php';

# Se verifica si se presiona el botón llamado iniciar-sesion
if (isset($_POST['iniciar']))
{
	# Se guarda el contendio de las cajas de texto en las variables $us y $ps
	$us=$_POST['usuario'];
	$ps=$_POST['contrasena'];
	
	# Se valida que las variables no esten vacias o nulas
	if (!empty($us) &&  !empty($ps))
	{
		# Query de consulta
		$query = "SELECT * from members WHERE usuario='".$us."' AND contrasena='".$ps."'";

		# Asigna el registro del Query
		$registro=mysqli_query($cnx,$query);

		# Asigna los datos del registro a la variable $campo
		$campo=mysqli_fetch_array($registro);

		# Cuenta la cantidad de registros del Query
		$count=mysqli_num_rows($registro);

		# Valida que la variable count tenga un valor
		if($count)	
		{	
			if ($campo['usuario']== $us AND $campo['contrasena'] == $ps AND $campo['permisos']) 
			if($campo['permisos']==1){ //**administrador**//

				header("location:admin.php");{
					$_SESSION['usuario']=$campo['usuario'];
					echo 'Bienvenido admin';

				}
				
			
			}else
			if($campo['permisos']==2){ //**USUARIO***//
			header("location:inicio.php");{
				$_SESSION['usuario']=$campo['usuario'];
				echo 'Bienvenido usuario';

			}
			
			}
		} 
		else
		{
		echo '<script language="javascript">alert("¡VERIFIQUE SUS CREDENCIALES!");window.location.href="index.php"</script>';
		     
		}
		
	}
}
?>