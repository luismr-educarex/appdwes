
<?php

session_start( );

$lista = array("amaya","julio","javier","nacho","sonsoles");

$_SESSION['datos'] = $lista ; // Añadimos la lista a la sesión con el nombre datos.


?>

<a href="recuperarDatosArrayDeSesion.php">VER DATOS DEL ARRAY</a>