
<?php

session_start( );
$hoy = date("d-m-Y") ; // Cargamos la fecha de hoy en formato dd-mm-aaaa
$_SESSION['hoy'] = $hoy ; // Añadimos el valor de la fecha a la sesión
$_SESSION['nombre_loguin'] = "Pedro" ; // Añadimos la cadena Pedro a la sesión con en nombre nombre_loguin


?>

<a href="mostrardatossesion.php">VER DATOS DE LA SESIÓN</a>