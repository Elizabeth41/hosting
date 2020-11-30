<?php

    /* Mando llamar la base de datos de phpmyadmin */
    // include("../BDEditWeb.php");
    include_once("../conexion.php");

    /* PARA INICIALIZAR SESION */
    session_start();

    /* si la variable de sesion no existe, entonces */
/*    if(!isset($_SESSION['iddepartameto'])){
        // Si no existe el acceso que me lo rediriga al LOGIN 
        header("location: ../login.php");
    }
  */  

/*
if(isset($_SESSION['iddepartameto'])){
    $records = $conex->prepare("SELECT iddepartameto, usuario, clave FROM  usuariosu WHERE iddepartamento = :iduser");
    $records->bindParam(':id',$_SESSION['iddepartameto']);
    $records->execute();
    $result = $records->fetch(PDO::FETCH_ASSOC);
    
    $user = null;
    
    if(count($result) > 0){
        $user = $result;
    }
}
*/

    /* variable de sesion */
/*
    $iddepartameto = $_SESSION['iddepartamento'];
    
    // consulta para usuarios 
    $sqlconsul = "SELECT usuario, clave FROM  usuariosu WHERE iddepartamento = $iddepartameto";

    // obtenemos el resultado y le pasamos la consulta 
    $resultado = $conex->query($sqlconsul);
    // asigno el resultado, realizamos un recorrido en la fila de la tabla para ello uso el fetch_assoc 
    $row = $resultado->fetch_assoc();
*/       
?>



<!DOCTYPE html>
<html>
    
    <head>
        
        <meta charset="utf-8"/>
        
                <meta name="author" content="EDITWeb" />
                <meta name="description" content="Desarrollo de pagina principal" />
                <meta name="revised" content="30/04/2020" />

                <meta charset="utf-8"/>
                <meta name="viewport" content="width=device-width, initial-scale=1.0">

                                <!-- ETIQUETA PARA LLAMAR HOJA DE ESTILO -->
                <link rel="stylesheet" type="text/css" href="paginaprincipal.css" media="screen" />

                <title>PAGINA PRINCIPAL</title>

                <link rel="stylesheet" href="https://kendo.cdn.telerik.com/2020.2.617/styles/kendo.default-v2.min.css"/>


                <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
                <script src="https://kendo.cdn.telerik.com/2020.2.617/js/kendo.all.min.js"></script>
        
    </head>
   
    
    <body>
    
        <?php if(!empty($user)):  ?>
        <br>Welcome.  <?= $user['usuario'] ?>
        <br> Tu estas logeado exitosamente
           
        <a class="navlink" href="../salir.php" id="salirboton" >salir</a>
       
        <?php else: ?>           
            
        
        <div>  
            
            <button onclick="location.href='../AreaComida/menuCPlantillas.php'" id="Boton1" class="btn btn-lg text-white border-white bg-semi-white btn-block mb-1">Area Comidas</button>
            
            <button onclick="location.href='../AreaProductos/menuPPlantillas.php'" id="Boton2" class="btn btn-lg text-white border-white bg-semi-white btn-block mb-1">Area Prod Electronicos</button>
            
<!--            <h1>
                <?php
                   echo "EL nombre es".$_REQUEST['username']; 
                ?>
            </h1> -->
         
        </div>
        
        <?php endif; ?>
        
    </body>
    
    <script type="text/javascript">
        // window.onload = alert(localStorage.getItem("resultadonombre"));
        // var recuperanombre = localStorage.getItem("resultadonombre");
        // alert(recuperanombre);

    </script>
    
</html>
