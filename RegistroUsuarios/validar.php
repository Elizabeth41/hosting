<?php
    /* Mando llamar la base de datos de phpmyadmin */
    // include("../BDEditWeb.php");
    include_once("../conexion.php");

/*
    if($conex){
        echo "todo correcto";
    }else{
        echo "todo incorrecto";
    }
*/
    
    
        /* Si se apreto el boton de guardar entonces */
    if(isset($_POST['submit'])){
        /* Si lo que viene en username y clave es menor a cero */
        if(strlen($_POST['username']) >= 1 && strlen($_POST['passsw']) >= 1){
            $username = trim($_POST['username']);
            $clave = trim($_POST['passsw']);
            /*$fecha = date("d/m/y");*/
            
            $consulta = "INSERT INTO usuarios ( usuario, clave) VALUES ('$username','$clave')";
            // $conex representa la conexion a la base de datos esta en BDEditWeb
            $resultado = mysqli_query($conex,$consulta);
            if($resultado){
                ?>


                    <!-- echo "<script> alert('Mensaje');   window.location= 'url.php'  </script>"; -->

                    <!-- <h3 class="ok">Te has inscrito correctamente</h3> -->
                    echo '<script> alert("Te has inscrito correctamente");

                          window.location = '../PaginaPrincipal/paginaprincipal.php';

                    </script>';

                <?php
            }else {
                ?>
                    <!-- <h3 class="bad">Ha ocurrido un error</h3> -->
                    echo '<script> alert("Ha ocurrido un error"); </script>';
                    
                <?php
            }
        }else{
            ?>
                <!-- <h3 class="Plusbad">Por favor complete los campos</h3> -->
                echo '<script> alert("Por favor complete los campos"); </script>';

            <?php
        }
    }

?>