

<?php

session_start();
$datos = $_SESSION['datos'] ;

echo 'CONTENIDO DEL ARRAY'.'<br>';
foreach($datos as $dato){
    echo $dato.'<br>';
}

session_destroy();

?>

