<?php 

    // INICIANLIZANDO LA SESION
    // session_start();

    // Mando llamar la base de datos de phpmyadmin 
    // include("BDEditWeb.php");
    include_once("conexion.php");
    // include("")
    // require 'BDEditWeb.php';
    
/*
    if(isset($_SESSION['login']) && $_SESSION['login'] === true){
        header("location: PaginaPrincipal/paginaprincipal.php");
        exit;
    }
    */

?>



<!DOCTYPE html>
<html>

    <head>
        <meta name="author" content="EDITWeb" />
        <meta name="description" content="Desarrollo de login" />
        <meta name="revised" content="20/06/2020" />
    
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <link rel="stylesheet" type="text/css" href="login.css" media="screen" />
        
        <!-- para poder usar el jquery ($) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
        
         
        <title>login</title>
    </head>
    
    <body background="">
      
        <section class="login-page">
            <form class="box" method="post" name="myform"  action="validarLogin.php" onsubmit="" >  
            <!-- <form class="box" name="form" action="PaginaPrincipal/paginaprincipal.html" onsubmit='validarLogin.php' return validando()"  > -->
                
              
                
                <div class="form-head">
                    <h2>Logeate</h2>
                </div>
                <div class="form-body">
                    <input type="text" placeholder="ingresa tu usuario" name="username" id="username" class="input" />
                    <input type="password" placeholder="ingresa tu clave" name="passsw" id="passsw"  class="input"/>
                </div>
                <div class="form-footer">
                    <span class="error_msg">Usuario o Clave incorrecto, por favor ingrese uno correcto.</span>
                    <button type="submit"   id="submit" name="submit" onclick="" >Login</button>
                </div>
                <div id="content-btn">
                    <a href="RegistroUsuarios/registroUsuarios.php" id="etiquetaIr">Registrar Usuario</a>
                </div>
            </form>
            
    
               
            
        </section>
        
       
        
      
    </body>
    
        
              <script src="login.js" type="text/javascript"></script>
   
</html>