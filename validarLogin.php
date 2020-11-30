<?php

    // DEFINIENDO VARIABLES E INICIALIZANDOLAS
    // $username = $passsw = "";
    $username_err = $password_err = "";

    $username = trim($_POST['username']); //metodo
    $passsw = trim($_POST['passsw']);

    // INICIANLIZANDO LA SESION
    session_start();
    $_SESSION['usuario']=$username;

     // Mando llamar la base de datos de phpmyadmin 
    // include("BDEditWeb.php");
    include_once("conexion.php");


//    if(isset($_POST['submit'])){

    // CONSULTA A LA TABLA USUARIOS 
    $consulta = "SELECT iddepartamento, usuario, clave FROM usuarios WHERE usuario = '$username' and clave = '$passsw'";
    // $resultado = mysql_query($conex,$consulta);
    $resultado = mysqli_query($conex,$consulta); // este resive dos parametros conexion y consulta
    
    $filas = mysqli_num_rows($resultado);

    // VALIDAMOS SI LA VARIABLE FILAS SON CORRECTOS
    if($filas>0){
        header("location: PaginaPrincipal/paginaprincipal.php");
        echo ' <script> alert("Login Exitoso, Bienvenido"); </script>';
    }else{
        echo '<script> alert("Error de autenticacion, intentelo mas tarde") </script> '; 
        //        include("login.php");
        //   
       // echo Problemas con la conexion;
    }

        // QUE ME LIBERE LA MEMORIA SI HE TERMINADO 
        mysqli_free_result($resultado); // para liberar 
        mysqli_close($conex);
//    }

?>



