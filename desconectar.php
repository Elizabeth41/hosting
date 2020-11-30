<?php
    /* Si hay una sesion abierta la destruira y la mandara al login */
    // inicializando las conexiones
    session_start();
    
    // destruye o elimina las conexiones
    session_destroy();

    // redirecciona a login.php
    header("location: login.php");

?>