<!DOCTYPE html>
<html>
    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <meta property="og:title" content="|ORZELLECA|" /> 
        <meta property="og:type" content="Gioielli" /> 
        <meta property="og:url" content="http://www.orzellecagioielli.it/" /> 
        <meta property="og:image" content="" /> 
        <meta property="og:description" content="Giielli" /> 
        <meta property="og:site_name" content="ORZELLECA Official Website" />

        <title>|ORZELLECA|</title>
        <meta content="ORZELLECA" name="keywords" />
        <meta content="ORZELLECA" name="description" />	
        <meta name="Author" content="Io-media" /> 
   
        <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script> 
        <link rel="stylesheet" type="text/css" href="css/orzelleca.css">

        <!-- jmslideshow plugin : extends the jmpress plugin -->
        <script type="text/javascript" src="js/jmpress.min.js"></script>
        <script type="text/javascript" src="js/jquery.jmslideshow.js"></script>
        <script type="text/javascript" src="js/modernizr.custom.48780.js"></script>
        <link href='css/style_slide.css' rel='stylesheet' type='text/css'>

        <!-- barretta prezzo-->
        <script type="text/javascript" src="js/jshashtable-2.1_src.js"></script>
        <script type="text/javascript" src="js/jquery.numberformatter-1.2.3.js"></script>
        <script type="text/javascript" src="js/tmpl.js"></script>
        <script type="text/javascript" src="js/jquery.dependClass-0.1.js"></script>
        <script type="text/javascript" src="js/draggable-0.1.js"></script>
        <script type="text/javascript" src="js/jquery.slider.js"></script>      

        <link rel="stylesheet" href="css/jslider.css" type="text/css">

        <!--showcase-->
        <link rel="stylesheet" href="css/style.aw-showcase.css" />
        <script type="text/javascript" src="js/jquery.aw-showcase.js"></script>

        <!--[if gte IE 9]>
        <style type="text/css">
        .gradient {
                filter: none;
        }
        </style>
        <![endif]-->

        <!--jpages-->
        <script type="text/javascript" src="js/jPages.js"></script>
        <link rel="stylesheet" href="css/jPages.css">
        <link rel="stylesheet" href="css/animate.css">

        <!--NyroModal-->
        <link rel="stylesheet" href="css/nyroModal.css" type="text/css" media="screen" />
        <script type="text/javascript" src="js/jquery.nyroModal.custom.js"></script>
        <!--[if IE 6]>
                <script type="text/javascript" src="js/jquery.nyroModal-ie6.min.js"></script>
        <![endif]-->

        <link rel="stylesheet" href="css/styles.css" type="text/css" media="screen" />

        <script type="text/javascript"  src="js/script.js"></script> 

    </head>
    <body >

        <div id="content"  ><div id="homepage">

                <div class="left" id="left"> 

                    <?php
                        $id_ordine = $_GET['id'];

                        include 'lib/funzioni.php';

                        $data = new MysqlClass();
                        $data->connetti();
                        $totord= 0;

                        $querySQL = "update ordini set pagamento ='O', pagato= 1 where id =" . $id_ordine;
                        $data->query($querySQL);
                        $data->disconnetti();
                    ?>

                    <div id="container_ordina">
                            <br>
                            <p id="tipo_pag">PAGAMENTO EFFETTUATO</p>
                            <br>
                            <p id="tipo_pag">La ringraziamo di averci scelti.</p>
                    </div>
                </div>
                <div class="right"  onclick="apri_categoria('liste')">
                    <!--                    <div class="box formazione" onmouseover="formazione_open()" onmouseout="formazione_close()">
                                            <div class="titolo"><p>FORMAZIONE</p></div>
                    
                                            <div id="hidden_form" >
                    
                                                <div id="orologi">
                                                    <p>OROLOGI</p>
                                                </div> 
                    
                    
                                            </div>
                                            <div id="hidden_form1">
                                                <div id="gioielli">
                                                    <p>GIOIELLI</p>
                                                </div>
                                            </div>
                    
                                            <div id="opened_form">
                                                <div class="img_form"><img src="img/orologi-box.jpg"></div>
                    
                    
                                                <div class="img_form"><img src="img/gioielli-box.jpg"></div>
                    
                    
                    
                                            </div>
                    
                                        </div>
                    
                                        <div class="box regali">
                                            <div class="titolo" id="titolo_regali"><p>APP REGALI</p></div>
                                            <div id="uomo"><input  type="radio" name="sesso" id="M" value="M"><label>Uomo</label></div>
                                            <div id="donna"><input  type="radio" name="sesso" id="F"  value="F"><label>Donna</label></div>
                    
                                            <select id="evento">
                                                <option>Evento</option>
                                                <option>Matrimonio</option>
                                                <option>Comunione</option>
                                                <option>Cresima</option>
                                            </select>
                    
                    
                    
                                            <div class="layout-slider">
                                                <input id="Slider2" type="slider" name="price" value="0;1000" />
                                            </div>
                                            <script type="text/javascript" charset="utf-8">
                                                jQuery("#Slider2").slider({ from: 0, to: 1000, step: 1,  scale: [0, 100 , 200, 300, 400, 500, 600, 700, 800, 900, 1000], dimension: '&nbsp;&#8364;' });
                                            </script>
                                            <div id="puls_cerca" onclick="apri_ricerca('true')" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('cerca','','img/cercaMO.png',1)">
                                                <img src="img/cerca.png" id="cerca" name="cerca">
                                            </div>
                    
                                        </div>
                    
                                        <div class="box oggetti" onmouseover="apri_outlet()" onmouseout="chiudi_outlet()">
                                            <div class="titolo"><p>OUTLET</p></div>
                    
                                            <div id="hidden_out" >
                    
                                                <div id="fascia">
                                                    <div id="prezzo_scontato">
                                                        <p><label>&#8364; 75,00 </label>&nbsp;  Sconto 15%</p>
                                                    </div>
                                                </div>
                                                <div id="piu" onclick="apri_vetrina(/*inserire l'id*/)" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('pi','','img/piu_on.png',1)"> 
                                                    <img src="img/piu_off.png" id="pi" name="pi">
                                                </div>
                    
                                                <div id="valida">
                                                    <p>Offerta valida<br> fino al 30 Giugno 2013</p>
                                                </div>
                                                <div id="vedi_tutti" onclick="apri_ricerca()" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('tutti','','img/tutti-i-prodottiMO.jpg',1)">
                                                    <img src="img/tutti-i-prodotti.jpg" id="tutti" name="tutti">
                                                </div>
                    
                                            </div>
                                            <div id="fondo_scritta">
                    
                                            </div>
                                            <div id="nome">
                                                <p>Vaso Baccarat</p>
                                            </div>
                                            <div id="prezzo">
                                                <p><label>&#8364; 54</label>,00</p>
                                            </div>
                                            <div id="opened_out"><img src="img/bracciale.jpg"></div>
                    
                    
                                        </div>
                    
                                        <div class="box nozze" id="nozzze"  >
                    
                                            <div id="liste" onclick="apri_categoria(this.id)" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('img_nozze','','img/LISTA-REGALI-ON.jpg',1)">
                                                <a  >
                                                    <img src="img/LISTA-REGALI.jpg" id="img_nozze" name="img_nozze">
                                                </a>
                                            </div>
                                            <div id="fb" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('img_fb','','img/FacebookON.jpg',1)">
                                                <a href="https://www.facebook.com/orzelleca.gioielli" target="_blank">
                                                    <img src="img/Facebook.jpg" id="img_fb" name="img_fb">
                                                </a>
                                            </div>
                    
                                        </div>-->


                </div> 
                <div id="barra_footer" onmouseover="pulsanti_on()" onmouseout="pulsanti_off()"  >
                    <div class="categorie" id="cat1" onclick="apri_categoria(this.id)"><a><label>&bull;</label>&nbsp;Partners</a></div>
                    <div class="categorie" id="cat2" onclick="apri_categoria(this.id)"><a><label>&bull;</label>&nbsp;Servizi</a></div>

                    <div class="categorie" id="cat3" onclick="apri_categoria(this.id)"  ><a > <label>&bull;</label>&nbsp;Chi Siamo</a></div>

                    <div class="categorie" id="cat4" onclick="apri_categoria(this.id)"><a><label>&bull;</label>&nbsp;Showrooms</a></div>

                    <div id="logo_orz" onclick="torna_home()">

                    </div>
                </div>
            </div>
        </div>

    </body>
</html>
