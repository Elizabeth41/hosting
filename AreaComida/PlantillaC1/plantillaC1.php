<!DOCTYPE html>
<html>

    <head>
        <meta name="author" content="EDITWeb" />
        <meta name="description" content="Desarrollo de Template1" />
    
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <link rel="stylesheet" type="text/css" href="plantillaC1.css" media="screen" />
    
        
        <!-- Estilos de infografias -->
         <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan+2:400,700&display=swap" rel="stylesheet" />
        <link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Bitter|Ubuntu+Mono' rel='stylesheet' type='text/css'>
        <script src="https://kit.fontawesome.com/012c6aed22.js" crossorigin="anonymous"></script>
      
        
            <!-- para poder usar el jquery ($) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>  <!--declarar variables !-->
        
          <script src="plantillaC1.js" type="text/javascript"></script>
       
        <title>Food and Restaurant</title>
        
    </head>
    
    <body>
        
        <!-- ****** POPUP/VENTANA EMERGENTE PARA GENERAR MENSAJE DE ALERTA ****** -->
        <div id="loading"></div>
        <div id="popUpMain" style="display: none;">
                    <div id="popup">
                        <h1 id="newsHeading">
                            Algunas sugerencias para ti.
                        </h1>
                        
                        <p id="tips">
                            <i class="fas fa-check" id="iconito"></i>
                            Modifica dando click en el texto que quieres editar y luego da click en el boton Modificar para actualizar los cambios.
                        </p>
                        <button class="submitID">
                            OK
                        </button>
                    </div>
        </div>
        <!-- ****** POPUP/VENTANA EMERGENTE PARA GENERAR MENSAJE DE ALERTA ****** -->
        
        
        <div class="modal-fb">
            <div class="modal-content">
                 <h1 id="newsHeading1">
                            Ingrese link de facebook.
                 </h1>
                <div class="close">X</div>
                <input type="text" placeholder="link facebook" id="txt-fb">
                <button class="btn-linkf" id="btnGuardo">
                    Guardar
                </button>
            </div>
        </div>
        
       <!--NAvbar--> 
       <!--End of NAvbar-->
        
        <!--Header--> 
        <header class="header" >
        
            <div class="hero">
                <h1 class="tittle" contenteditable="true">Food For Healt</h1>
                <a href="#" class="hero-button pulsate" contenteditable="true" id="btn1">Book a table</a>
            </div>
            
        </header>
        
        
        <!--End of Header-->
        
        <!--About us-->
        <section id="about">
            <div>
                <h2 class="tittle-text" contenteditable="true">About us</h2>
            </div>
            <div class="about-center">
                <!--start of article-->
                <article class="about">
                    
                    <div class="about-icon">
                        <i class="fas fa-mug-hot"></i>
                    </div>
                    
                    <div class="about-text">
                        <h2 class="about-subtittle" contenteditable="true" id="sub">Drinks</h2>
                        <p class="about-info" id="info" contenteditable="true">
                            Lorem ipsum dolor sit amet consectetur adipisicing
                        </p>
                    </div>
                    
                </article>
                <!--End ofstart of article-->
                
                 <!--start of article-->
                <article class="about">
                    
                    <div class="about-icon">
                        <i class="fas fa-utensils"></i>
                    </div>
                    
                    <div class="about-text">
                        <h2 class="about-subtittle" contenteditable="true" id="sub1">Healthy Food</h2>
                        <p class="about-info" id="info1" contenteditable="true">
                            Lorem ipsum dolor sit amet consectetur adipisicing
                        </p>
                    </div>
                    
                </article>
                <!--End ofstart of article-->
                
                 <!--start of article-->
                <article class="about">
                    
                    <div class="about-icon">
                        <i class="fas fa-mortar-pestle"></i>
                    </div>
                    
                    <div class="about-text">
                        <h2 class="about-subtittle" contenteditable="true" id="sub2">Organic Food</h2>
                        <p class="about-info" id="info2" contenteditable="true">
                            Lorem ipsum dolor sit amet consectetur adipisicing
                        </p>
                    </div>
                    
                </article>
                <!--End ofstart of article-->
                
                 <!--start of article-->
                <article class="about">
                    
                    <div class="about-icon">
                        <i class="fas fa-drumstick-bite"></i>
                    </div>
                    
                    <div class="about-text">
                        <h2 class="about-subtittle" contenteditable="true" id="sub3">White Meat</h2>
                        <p class="about-info" id="info3" contenteditable="true">
                            Lorem ipsum dolor sit amet consectetur adipisicing
                        </p>
                    </div>
                    
                </article>
                <!--End ofstart of article-->
            </div>
        </section>
        
        <!--End of About us-->
        
        <!--Menu Section-->
        <section class="mennu" id="menu">
            <article class="menu-image"></article>
            <article class="menu-text">
                <div class="menu-text-center"> 
                    <h1 id="UltimoMenu" contenteditable="true">Our Menu</h1>
                    <p class="about-info-inferior" contenteditable="true" id="infoP">Lorem, ipsum dolor sit amet consectetur adipisicing. Consequntur saepe pariatur tempore quidem odit fugit</p>
                    <a href="#" class="btnExplore" contenteditable="true">Explore</a>
                </div>
            </article>
        </section>
        <!--End of Menu Section-->
        
        <!--Social Icons-->
        <section id="social-icons">
            <a href="#"><i class="fab fa-facebook facebook" id="facebook"></i></a>
            <a href="#"><i class="fab fa-twitter twitter"></i></a>
            <a href="#"><i class="fab fa-instagram instagram"></i></a>
        </section>
        
        <!--End of Social Icons-->
        
        <!--Numbers-->
        <section id="numbers">
            <article class="number">
                <i class="fas fa-cloud-meatball"></i>
                <p>50</p>
                <h3>Meat Dishes</h3>
            </article>
            
            <article class="number">
                <i class="fas fa-cheese"></i>
                <p>35</p>
                <h3>Cheese Dishes</h3>
            </article>
            
            <article class="number">
                <i class="fas fa-pizza-slice"></i>
                <p>25</p>
                <h3>Pizza Dishes</h3>
            </article>
            
            <article class="number">
                <i class="fas fa-ice-cream"></i>
                <p>50</p>
                <h3>Pizza Dishes</h3>
            </article>
        </section>
        <!--End of Number-->
        
        
        <div class="btn-flotante">
            <a href="#" class="btn-flota" id="btnFlota" onclick="datosGuardar()">
                Modificar
            </a>
        </div>
                
        
    </body>
    
    
     
    
    
        <script type="text/javascript" >
                
            
                /* METODO ModificaTitulo PARA QUE AL HACER CLICK PUEDA MODIFICAR EL TITULO Y QUEDE GUARDADO */
                var $h1 = $('.tittle');
                console.log(document.getElementById('.tittle'));

                // funcion para guardar los datos usando una clave y un valor asignado
                $('.tittle').click(function(){
                    localStorage.setItem('tittle', $h1.html());
                                        // llave    muestra contenido editable en pantalla
                });


                if(localStorage.getItem('tittle')){    
                    
                    $h1.html(localStorage.getItem('tittle'));
                    
                }
            
                var tittleresultado = localStorage.getItem('tittle');

                console.log(tittleresultado);
            
                /*  FIN DE METODO ModificaTitulo */
            
            
            
                /* *********METODO ModificaTitulo2********* */
                var $h2 = $('.tittle-text');
                console.log(document.getElementById('.tittle-text'));

                // funcion para guardar los datos usando una clave y un valor asignado
                $('.tittle-text').click(function(){
                    localStorage.setItem('tittle-text', $h2.html());
                                        // llave 
                });


                if(localStorage.getItem('tittle-text')){    
                    
                    $h2.html(localStorage.getItem('tittle-text'));
                    
                }
            
                var tittleresultado2 = localStorage.getItem('tittle-text');

                console.log(tittleresultado2);
                /*  FIN DE METODO ModificaTitulo2 */
            
            
                /* *********METODO ModificaSubtitulos********* */
                var $sub = $('#sub');
                console.log(document.getElementById('#sub'));
                var $sub1 = $('#sub1');
                console.log(document.getElementById('#sub1'));
                var $sub2 = $('#sub2');
                console.log(document.getElementById('#sub2'));
                var $sub3 = $('#sub3');
                console.log(document.getElementById('#sub3'));
                

                // funcion para guardar los datos usando una clave y un valor asignado
                $('#sub').click(function(){
                    localStorage.setItem('sub', $sub.html());
                                        // llave 
                });


                if(localStorage.getItem('sub')){    
                    
                    $sub.html(localStorage.getItem('sub'));
                    
                }
            
                var tittleresultado3 = localStorage.getItem('sub');

                console.log(tittleresultado3);
                // ---------------------------------------------------------------------
                $('#sub1').click(function(){
                    localStorage.setItem('sub1', $sub1.html());
                                        // llave 
                });


                if(localStorage.getItem('sub1')){    
                    
                    $sub1.html(localStorage.getItem('sub1'));
                    
                }
            
                var tittleresultado4 = localStorage.getItem('sub1');

                console.log(tittleresultado4);
                // -------------------------------------------------------------------------
                $('#sub2').click(function(){
                    localStorage.setItem('sub2', $sub2.html());
                                        // llave 
                });


                if(localStorage.getItem('sub2')){    
                    
                    $sub2.html(localStorage.getItem('sub2'));
                    
                }
            
                var tittleresultado5 = localStorage.getItem('sub2');

                console.log(tittleresultado5);
                // ----------------------------------------------------------------------------
                $('#sub3').click(function(){
                    localStorage.setItem('sub3', $sub3.html());
                                        // llave 
                });


                if(localStorage.getItem('sub3')){    
                    
                    $sub3.html(localStorage.getItem('sub3'));
                    
                }
            
                var tittleresultado6 = localStorage.getItem('sub3');

                console.log(tittleresultado6);
                /*  FIN DE METODO ModificaSubtitulos */
            
            
                /* ****** METODO ModificaTituloOURMENU *******  */
                var $UltimoMenu = $('#UltimoMenu');
                console.log(document.getElementById('#UltimoMenu'));
                

                // funcion para guardar los datos usando una clave y un valor asignado
                $('#UltimoMenu').click(function(){
                    localStorage.setItem('UltimoMenu', $UltimoMenu.html());
                                        // llave 
                });


                if(localStorage.getItem('UltimoMenu')){    
                    
                    $UltimoMenu.html(localStorage.getItem('UltimoMenu'));
                    
                }
            
                var tittleresultado7 = localStorage.getItem('UltimoMenu');

                console.log(tittleresultado7);
            
                /* FIN DE METODO */
            
            
            
                /* ******************TEXTO ETIQUETA P **************** */
                var $info = $('#info');
                console.log(document.getElementById('#info'));
                var $info1 = $('#info1');
                console.log(document.getElementById('#info1'));
                var $info2 = $('#info2');
                console.log(document.getElementById('#info2'));
                var $info3 = $('#info3');
                console.log(document.getElementById('#info3'));

                // funcion para guardar los datos usando una clave y un valor asignado
                $('#info').click(function(){
                    localStorage.setItem('info', $info.html());
                                        // llave 
                });


                if(localStorage.getItem('info')){    
                    
                    $info.html(localStorage.getItem('info'));
                    
                }
            
                var tittleresultado8 = localStorage.getItem('info');

                console.log(tittleresultado8);
            
            
                    // ********************************************************
                $('#info1').click(function(){
                    localStorage.setItem('info1', $info1.html());
                                        // llave 
                });


                if(localStorage.getItem('info1')){    
                    
                    $info1.html(localStorage.getItem('info1'));
                    
                }
            
                var tittleresultado9 = localStorage.getItem('info1');

                console.log(tittleresultado9);
            
            
            
                $('#info2').click(function(){
                    localStorage.setItem('info2', $info2.html());
                                        // llave 
                });


                if(localStorage.getItem('info2')){    
                    
                    $info2.html(localStorage.getItem('info2'));
                    
                }
            
                var tittleresultado10 = localStorage.getItem('info2');

                console.log(tittleresultado10);
            
            
            
                $('#info3').click(function(){
                    localStorage.setItem('info3', $info3.html());
                                        // llave 
                });


                if(localStorage.getItem('info3')){    
                    
                    $info3.html(localStorage.getItem('info3'));
                    
                }
            
                var tittleresultado11 = localStorage.getItem('info3');

                console.log(tittleresultado11);
            
            
                /* FIN DE METODO */
            
            
            
                
                 /* *********METODO ModificaPrimerBoton********* */
                var $btn1 = $('#btn1');
                console.log(document.getElementById('#btn1'));

                // funcion para guardar los datos usando una clave y un valor asignado
                $('#btn1').click(function(){
                    localStorage.setItem('btn1', $btn1.html());
                                        // llave 
                });


                if(localStorage.getItem('btn1')){    
                    
                    $btn1.html(localStorage.getItem('btn1'));
                    
                }
            
                var tittleresultado13 = localStorage.getItem('btn1');

                console.log(tittleresultado13);
                /*  FIN DE METODO ModificaPrimerBoton */
            
            
            
                 /* *********METODO ModificaUltimoP atributo P******** */
                var $infoP = $('#infoP');
                console.log(document.getElementById('#infoP'));

                // funcion para guardar los datos usando una clave y un valor asignado
                $('#infoP').click(function(){
                    localStorage.setItem('infoP', $infoP.html());
                                        // llave 
                });


                if(localStorage.getItem('infoP')){    
                    
                    $infoP.html(localStorage.getItem('infoP'));
                    
                }
            
                var tittleresultado14 = localStorage.getItem('infoP');

                console.log(tittleresultado14);
                /*  FIN DE METODO ModificaUltimoP */
            
            
                /* *********METODO ModificaBotonExplorer********* */
                var $btnExplore = $('.btnExplore');
                console.log(document.getElementById('.btnExplore'));

                // funcion para guardar los datos usando una clave y un valor asignado
                $('.btnExplore').click(function(){
                    localStorage.setItem('btnExplore', $btnExplore.html());
                                        // llave 
                });


                if(localStorage.getItem('btnExplore')){    
                    
                    $btnExplore.html(localStorage.getItem('btnExplore'));
                    
                }
            
                var tittleresultado14 = localStorage.getItem('btnExplore');

                console.log(tittleresultado14);
                /*  FIN DE METODO ModificaBotonExplorer */
            
            
            
            
                /*      PROBANDO POP UP PARA AGREGAR LINK MANERA VIRTUAL
                var linkfb = document.getElementById("#txt-fb");
                var guardarfb = document.getElementById("#btnGuardo");
                var cerrar = document.getElementById("#close");
                var fcb = document.getElementById("#facebook");
            
                if(fcb){
                fcb.addEventListener('click', function(){
                   document.querySelector(".modal-fb").style.display = 'flex';
                });
                    cerrar.addEventListener('click', function(){
                        document.querySelector(".modal-fb").style.display = 'none';
                    });
                    
                    
                }
                */
            
            
                    /* ******************* A LA HORA DE DAR CLICK EN EL BOTON SE ACTUALIZA ************ */
                
                var btnFlota = document.getElementById("#btnFlota"); 
            
                function datosGuardar(){
                    
                    $('#btnFlota').click(function(){
                            location.reload();
                            localStorage.setItem('tittle', $h1.html());
                            localStorage.setItem('tittle-text', $h2.html());
                            localStorage.setItem('sub', $sub.html());
                            localStorage.setItem('sub1', $sub1.html());
                            localStorage.setItem('sub2', $sub2.html());
                            localStorage.setItem('sub3', $sub3.html());
                            localStorage.setItem('UltimoMenu', $UltimoMenu.html());
                            localStorage.setItem('info', $info.html());
                            localStorage.setItem('info1', $info.html());
                            localStorage.setItem('info2', $info.html());
                            localStorage.setItem('info3', $info.html());
                            localStorage.setItem('infoP', $infoP.html());
                            localStorage.setItem('btn1', $btn1.html());
                            localStorage.setItem('btnExplore', $btnExplore.html());

                                                // llave 
                    });
                    
                    
                    
                    if(localStorage.getItem('#btnFlota')){    
                    
                            $h1.html(localStorage.getItem('tittle'));
                            $h2.html(localStorage.getItem('tittle-text'));
                            $sub.html(localStorage.getItem('sub'));
                            $sub1.html(localStorage.getItem('sub1'));
                            $sub2.html(localStorage.getItem('sub2'));
                            $sub3.html(localStorage.getItem('sub3'));
                            $UltimoMenu.html(localStorage.getItem('UltimoMenu'));
                            $info.html(localStorage.getItem('info'));
                            $info1.html(localStorage.getItem('info1'));
                            $info2.html(localStorage.getItem('info2'));
                            $info3.html(localStorage.getItem('info3'));
                            $btn1.html(localStorage.getItem('btn1'));
                            $infoP.html(localStorage.getItem('infoP'));
                            $btnExplore.html(localStorage.getItem('btnExplore'));
                }
                          /*  if(location.reload()){
                                tittleresultado;
                                tittleresultado1;
                                tittleresultado2;
                                tittleresultado3;
                                tittleresultado4;
                                tittleresultado5;
                                tittleresultado6;
                                tittleresultado7;
                                tittleresultado8;
                                tittleresultado9;
                                tittleresultado10;
                                tittleresultado11;
                                tittleresultado13;
                                tittleresultado14;
                                tittleresultado15;

                                location.reload();
                            }*/
                }
            
            
            
            
            var modal = document.getElementById("loading");
            
            var btn = document.getElementById(".submitID");
            
            
                function myFunction(){
                    preloader.style.display = 'none';
                }

                $(document).ready(function(){
                   /* setTimeout(function(){
                        $('#popUpMain').css('display', 'block');
                    }, 5000);  */
                        $('#popUpMain').css('display', 'block');
                    
                });
            
                $('.submitID').click(function(){
                   $('#popUpMain').css('display', 'none'); 
                });
                
            
                
                
        </script>
    
        
        
    
</html>


        


<!--https://www.youtube.com/watch?v=X9M81E4yh6A-->


<!--https://www.youtube.com/watch?v=iM27kA5M3vo-->


