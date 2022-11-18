<?php 
if (empty($_SESSION['usuario'])) {
echo'<script type="text/javascript"> alert("Tu sesión ha caducado");
window.location.href="index.php";</script>';
}
?>