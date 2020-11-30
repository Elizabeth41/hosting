<!DOCTYPE html>
<html>

    <head>
        <meta name="author" content="EDITWeb" />
        <meta name="description" content="Desarrollo de Template1" />
    
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <link rel="stylesheet" type="text/css" href="plantillaP2.css" media="screen" />
        <!-- Estilos de infografias -->
         <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700,880" rel="stylesheet" />
        <link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Bitter|Ubuntu+Mono' rel='stylesheet' type='text/css'>
        
            <!-- para poder usar el jquery ($) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
        
        
       
        <title>PLANTILLA 2</title>
        
    </head>
    
    <body>
        
        <section class="sec">
            <header>
                <a href="#"><img src="../../imgs/cel1.png" class="imagen-1"></a>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Products</a></li>
                    <li><a href="#">What's New</a></li>
                    
                </ul>
            </header>
            
            <div class="content">
                <div class="textBox">
                    <h2>That's What<br><span>I Like</span></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim and minim veniam.</p>
                    <a href="#">View All Products</a>
                </div>
                <div class="imgBox">
                    <img src="../../imgs/cel1.png" class="celular" id="img1"  onclick="changes();">
                </div>
            </div>
            
            <ul class="thumb">
                <li><img src="../../imgs/cel.png" onclick="imgSlider('../../imgs/cel.png'); changeBgColor('#0062be')"></li>
                <li><img src="../../imgs/cel1.png" onclick="imgSlider('../../imgs/cel1.png'); changeBgColor('#e60c2c')"></li>
                <li><img src="../../imgs/cel.png" onclick="imgSlider('../../imgs/cel.png'); changeBgColor('#1e1e1e')"></li>
                
                <!--
    
                <li><img src="../../imgs/cel.png" onclick="imgSlider('../../imgs/cel.png'); changeBgColor('#0062be')"></li>
                <li><img src="../../imgs/cel1.png" onclick="imgSlider('../../imgs/cel1.png'); changeBgColor('#e60c2c')"></li>
                <li><img src="../../imgs/cel.png" onclick="imgSlider('../../imgs/cel.png'); changeBgColor('#1e1e1e')"></li>
                -->
            </ul>
            
            <ul class="sci">
                <li><a href="#"><img src="../../imgs/fb.png"></a></li>
                <li><a href="#"><img src="../../imgs/ig.png"></a></li>
            </ul>
            
            
            <!-- <div>
            <button onclick="location.href='../inicio.html'" id="P2Boton1">Regresar</button>       
            </div>
            -->
            
        </section>
        
        <script type="text/javascript">
            function imgSlider(anything){
                document.querySelector('.celular').src = anything;
            }
            
            function changeBgColor(color){
                const sec = document.querySelector('.sec');
                sec.style.background = color;
            }
        </script>
        
        
        
        <script type="text/javascript">
            
            var img_tracker = "f";
            
            function changes(){
                
                var img1 = document.getElementById('.celular');
                
                if (img_tracker == "f"){
                    img1.src = "../../imgs/" + folder + ".png";               
                    img_tracker = "t";
                }else{
                    img1.src = "";
                    img_tracker = "f";
                }
                

            }            
            
            
            
                /* METODO ModificaImagenCelular PARA QUE AL HACER CLICK PUEDA MODIFICAR****************** */

                /*  FIN DE METODO ModificaTitulo */
            
            
    
        </script>
        
       
    </body>
    
</html>