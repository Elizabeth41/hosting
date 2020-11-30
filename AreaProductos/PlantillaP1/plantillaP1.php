<!DOCTYPE html>
<html>

    <head>
        <meta name="author" content="EDITWeb" />
        <meta name="description" content="Desarrollo de Template1" />
    
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <link rel="stylesheet" type="text/css" href="plantillaP1.css" media="screen" />
        <!-- Estilos de infografias -->
         <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700,880" rel="stylesheet" />
        <link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Bitter|Ubuntu+Mono' rel='stylesheet' type='text/css'>
         
        
        <title>PLANTILLA 1</title>
    </head>
    
    <body>
        <!--menu-->
        
        
            <header>
                <nav>
                    <div class="logo" for="logo">
                        <img src="../../imgs/taconnegro.png" alt="" id="logo" onclick="verImagen();">
                        
                        
                    </div>
                    <div class="icono" id="icono">
                        <span>&#9775;</span>
                    </div>
 
                    <div class="enlaces uno" id="enlaces" contenteditable for="mItem1">
                        <a href="#" class="active"  for="mItem1" id="mItem1">Inicio</a>
                        <a href="#" for="mItem1" id="mItem1">Acerca de</a>
                        <a href="#" for="mItem1" id="mItem1">Contacto</a>
                    </div>
                </nav>

                <div class="textos">
                                            <h1 id="tituloTexto" onclick="Modificar()" contenteditable="true">Bienvenido</h1>
                </div>

            </header>


             <div id="cuerpo">
                    <button  onclick="location.href='../menuPPlantillas.php'" id="P1Boton1">Regresar Menu</button>
                   <!-- <button  onClick="history.go(-1);"  id="P2Boton3">Regresar 2</button>    -->
                    <button onclick="location.href='../menuPPlantillas.php'" id="P1Boton2">Finalizar</button>
                 
              </div>

        
    </body>
    
    
    
    
    <script>
        /*
        function cambiar(){
            document.getElementById("titulo").innerHTML = "Aja te cambie";
        }
        document.getElementById("button").onclick = function(){
            cambiar();
        }
        
        
        */
    </script>
 
    
    
    
    
    
     <!-- para poder usar el jquery ($) y poder declarar variables -->
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"  src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js">
        
        
        document.getElementById("tituloTexto").onclick = Modificar;
        
        function Modificar(){
                var tituloTexto = document.getElementById("tituloTexto");
                /* lo que se encuentra dentro de la etiqueta*/
                tituloTexto.innerHTML = tituloTexto;

        }
        
        
        
        $('h1').replaceWith('h1');
        
        
        /////////////////////////////////////////////////////////////////////////////////////
    
            var $h1 = $('h1');
            
            // FUNCION PARA GUARDAR INFORMACION -- uso de JQUERY combinado con JAVASCRIPT
                // Titulo
            $('#tituloTexto').click(function(){    
                 localStorage.setItem('tituloTexto', $h1.html());
                                    // llave 
            });
            
        
            $('#tituloTexto').focusout(function(){    
                localStorage.setItem('tituloTexto', $h1.html());
                                    // llave 
            });
        
           
            //        clickOutsideThisElement
            
            // OBTENEMOS EL VALOR/CONTENIDO QUE TIENE "tituloTexto"    
            if(localStorage.getItem('tituloTexto')){    
                localStorage.setItem('tituloTexto', $h1.html());
               $h1.html(localStorage.getItem('tituloTexto'));
            }

        
        
            // FUNCION PARA GUARDAR IMAGEN 
       
  
        
        
        
        // ********************************************************************************************* //

    </script>
           
    
</html>