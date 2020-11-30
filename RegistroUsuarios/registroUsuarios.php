   <?php
                include("validar.php");
    ?>
            

<!DOCTYPE html>
<html>

    <head>
        <meta name="author" content="EDITWeb" />
        <meta name="description" content="Desarrollo de login" />
        <meta name="revised" content="20/06/2020" />
    
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <link rel="stylesheet" type="text/css" href="registroUsuarios.css" media="screen" />
        
        <!-- para poder usar el jquery ($) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
        
        
    <!--      <script src="login.js" type="text/javascript"></script>   -->
        
        <title>login</title>
    </head>
    
    <body background="">
        
        <section class="login-page">
            
            <form class="box" method="post" name="formRegistro"  action="validar.php" onsubmit=" " >  
            <!-- <form class="box" name="form" action="../PaginaPrincipal/paginaprincipal.html" onsubmit=" return loginUsers()"  > -->
                <div class="form-head">
                    <h2>Registro Usuarios</h2>
                </div>
                <div class="form-body">
                    <input type="text" placeholder="ingresa nombre de usuario" name="username" id="username" class="input" />
                    <input type="password" placeholder="ingresa una clave" name="passsw" id="passsw"  class="input"/>
                </div>
                <div class="form-footer">
                    <span class="error_msg">Usuario o Clave incorrecto, por favor ingrese uno correcto.</span>
<!--                    <button type="submit"   id="submit" onclick="validar()" >Login</button> -->
                    <button type="submit"  name="submit" id="submit" onclick="" >Registrar</button>
                </div>
                
                <div id="content-btn">
                    <a href="../login.php" id="etiquetaIr">Atras</a>
                </div>
      
                
            </form>
            
         
        </section>
        
      
    </body>
    
    
    
                  <script src="registroUsuarios.js" type="text/javascript"></script>

</html>