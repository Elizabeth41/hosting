<?php
    // Si hay una sesion abierta la destruira y la mandara al login 
    session_start();

    // traendo todas las variables
    $_SESSION = array();

    // Destruyendo las sesiones
    session_destroy();

    // Redirigiendo a pagina login.php
    header("location: login.php");  
    exit;

?>