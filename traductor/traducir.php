<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Guarani</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Le styles -->
        <link href="css/bootstrap.min.css" media="screen" rel="stylesheet" type="text/css">
        <link href="css/style.css" media="screen" rel="stylesheet" type="text/css">

        <link href="css/clean-blog.css" rel="stylesheet">
        
	
        <!-- Scripts -->
        <!--[if lt IE 9]><script type="text/javascript" src="js/html5shiv.js"></script><![endif]-->
        <!--[if lt IE 9]><script type="text/javascript" src="js/respond.min.js"></script><![endif]-->
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/bootbox.js"></script>        
        <script type="text/javascript">
                $(function(){														
                    $("#traducir").click(function(){
                          buscar(null);  
                    });                                                            
                });                                

                
                $(document).ready(function () {
                //hide hider and popup_box
                $("#hider").hide();
                $("#popup_box").hide();

                //on click show the hider div and the message
                $("#showpopup").click(function () {
                    $("#hider").fadeIn("slow");
                    $('#popup_box').fadeIn("slow");
                });
                //on click hide the message and the
                $("#buttonClose").click(function () {

                    $("#hider").fadeOut("slow");
                    $('#popup_box').fadeOut("slow");
                });

                });

                function ejemplo(){
                    document.getElementById('selectguarani').checked = true;
                    document.getElementById('palabra').value = 'ab';
                    buscar(null);
                }
                
                function resumen(){
                    $.ajax({
                        url: "ws.php?method=resumen"
                    }).then(function(data) {
                         bootbox.alert("<span>"+ data.cantidadespanol+" palabras espa&ntilde;ol. "+ data.cantidadguarani+" palabras guaran&itilde;</span>");
                    });
               }
        
	    </script>
        <script type="text/javascript" src="js/buscar.js"></script>
        <script src="js/clean-blog.js" type="text/javascript"></script>
    </head>

    <body>

    <!-- Navegación -->
        <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
            <div class="container-fluid">

                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        Menu <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="#">Traductor Guaran&iacute; - Espa&ntilde;ol</a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#">Traductor</a>
                        </li>
                        <li>
                            <a href="#">Diccionario</a>
                        </li>
                        <li>
                            <a href="#" data-toggle="modal" data-target="#InfoModal">Informaci&oacute;n</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>

        <header class="intro-header" style="background-image: url('img/home-bg.jpg')">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                        <div class="site-heading">
                            <img src="img/portada.png" class="center">
                            <h2>Traductor de Palabras Guaran&iacute; - Espa&ntilde;ol <img src="img/info.png" onclick="resumen();" style="cursor:pointer" width="30px" height="auto"></h2>

                            <hr class="small">

                            <input name="palabra" size="100px" id="palabra" placeholder="Ingrese la palabra que desea traducir" type="text" class="form-control buscador_principal" value="" onkeydown="if (event.keyCode == 13) document.getElementById('traducir').click()">    

                            <br>
                            <div class="row">
                                <div class="col-lg-4 col-sm-4 col-xs-6">
                                    <div class="btn-group btn-group-sm" role="group" aria-label="First group"> 
                                        <button type="button" class="btn btn-default">Ã</button> 
                                        <button type="button" class="btn btn-default">Ẽ</button> 
                                        <button type="button" class="btn btn-default">Ĩ</button> 
                                        <button type="button" class="btn btn-default">Ñ</button> 
                                        <button type="button" class="btn btn-default">Õ</button> 
                                        <button type="button" class="btn btn-default">Ũ</button> 
                                        <button type="button" class="btn btn-default">Ỹ</button> 
                                    </div>
                                </div>
                                <div class="col-lg-8 col-sm-8 col-xs-6">

                                    <div class="row">
                                        <div class="col-lg-8 col-sm-8">
                                            <div class="btn-group btn-group-sm btn-group-justified" data-toggle="buttons">
                                              <label class="btn btn-default active" for="selectguarani">
                                                <input type="radio" autocomplete="off" checked  name="idioma" id="selectguarani" value="gu" onkeydown="if (event.keyCode == 13) document.getElementById('traducir').click()"> &nbsp;al guaran&iacute;
                                              </label>
                                              <label class="btn btn-default" for="selectspanish">
                                                <input type="radio" autocomplete="off" name="idioma" id="selectspanish" value="es" onkeydown="if (event.keyCode == 13) document.getElementById('traducir').click()">&nbsp;al espa&ntilde;ol
                                              </label>
                                            </div>
                                            <a style="color:#FFF; font-size: 15px;" href="javascript:ejemplo();">Pruebe un ejemplo</a>
                                        </div>
                                        <div class="col-lg-4 col-sm-4">
                                            <input name="button" type="button" id="traducir" class="btn btn-primary" value="Traducir">
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            

                            

                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="container">

            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            	 
        	       <div id="desplegarResultados">
                   
                        <div id="myModal" class="modal fade">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        Debe seleccionar un idioma
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary">Esta bien</button>
                                    </div>
                                </div>
                            </div>
                         </div>	   
                    </div> 

                </div>
            </div>
        </div>  

        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        
                        <p class="copyright text-muted">Construido conjuntamente con la <b>SPL</b> (Secretar&iacute;a de Pol&iacute;ticas Ling&uuml;&iacute;sticas) y la <b>SENATICs</b> (Secretar&iacute;a Nacional de Tecnolog&iacute;as de la Informaci&oacute;n y Comunicaci&oacute;n)</p>
                    </div>
                </div>
            </div>
        </footer>             	 
 

<div id="example-popup" class="popup">
    <div class="popup-body">	<span class="popup-exit"></span>
        <div class="popup-content">
            <h2 class="popup-title">Lengua Guaran&iacute;</h2>
            La Lengua Guarani o Avañe’ê es el medio de comunicación del 87% de la actual población del 
            paraguay. A lo largo de la historia, desde la colonia hasta 1990, el idioma Guarani sufrió 
            todas las formas imaginables e inimaginables de persecución, degradación y marginación. Sus 
            dueños originales, usuarios genuinos de la Lengua Guarani o Avañe’ê, prácticamente están en extinción 
            en el Paraguay, ya que del total de habitantes, los Indígenas representan aproximadamente un 2%, y de 
            ese porcentaje, apenas el 1% son indígenas Guarani.
        </div>
    </div>
</div>

<!-- información -->
<div class="modal fade" id="InfoModal" tabindex="-1" role="dialog" aria-labelledby="InfoModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content" style="alignment-adjust: central;">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Informaci&oacute;n</h4>
            </div>
            <div class="modal-body">
                <h3>Guaran&iacute;</h3>
                El guaran&iacute;, una lengua americana hablada en 7 pa&iacute;ses de Am&eacute;rica del sur, compartida por ind&iacute;genas 
                y criollos en Paraguay, donde es lengua oficial del Estado por disposici&oacute;n constitucional con cerca de 4 millones 
                de hablantes en Paraguay, donde es lengua materna del 86% de los habitantes. Esta lengua comparte con el castellano
                todo el territorio y todos los estratos sociales del pa&iacute;s. 
                <hr>
                <h4>Obras Consultadas:</h4>
                <ul>
                    <li>Guasch, Antonio y Ortiz, Diego (1986): Diccionario castellano-guaraní, guaraní-castellano. Sintáctico, fraseológico, ideológico. Asunción: CEPAG.</li>
                    <li>Ortiz Mayans, Antonio (1997): Gran diccionario castellano-guaraní, guaraní-castellano. Ñe’ẽ ryru guasu karaiñe’ẽ-avañe’ẽ, avañe’ẽ-karaiñe’ẽ. Santafé de Bogotá, Colombia: EUDEPA.</li>
                    <li>Peralta, Jover y Osuna, Tomás (1950): Diccionario guaraní-español y español-guaraní. Ñe’ẽnguerĭrú avañe’ẽ-caraiñe’ẽ ha caraiñe’ẽ-avañe’ẽ. Buenos Aires: Tupã.</li>
                    <li>Ruiz de Montoya, Antonio. (1876 [1639]): Tesoro de la lengua guaraní. Edición facsimilar de Julio Platzmann. Leipzig: B. G. Teubne.</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="popup-overlay"></div>
<script type='text/javascript'>//<![CDATA[ 
$(window).load(function(){
jQuery(document).ready(function ($) {

    $('[data-popup-target]').click(function () {
        $('html').addClass('overlay');
        var activePopup = $(this).attr('data-popup-target');
        $(activePopup).addClass('visible');

    });

    $(document).keyup(function (e) {
        if (e.keyCode == 27 && $('html').hasClass('overlay')) {
            clearPopup();
        }
    });

    $('.popup-exit').click(function () {
        clearPopup();

    });

    $('.popup-overlay').click(function () {
        clearPopup();
    });

    function clearPopup() {
        $('.popup.visible').addClass('transitioning').removeClass('visible');
        $('html').removeClass('overlay');

        setTimeout(function () {
            $('.popup').removeClass('transitioning');
        }, 200);
    }
    
});
});//]]>  

</script>

    </body>
</html>
