<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>| ORZELLECA |</title>
        <script src="jsv/jquery-1.9.1.min.js"></script>
        <script src="jsv/script.js"></script> 
        <!--        <link rel="stylesheet" href="css/layerslider.css" type="text/css">
                <link rel="stylesheet" href="css/style_1.css" type="text/css">-->
        <link rel="stylesheet" href="css/stile.css" type="text/css">

        <!--[if lt IE 9]>
                <script src="js/html5.js"></script>
        <![endif]-->
        <script src="jsv/jquery-easing-1.3.js" type="text/javascript"></script>
        <script src="jsv/layerslider.kreaturamedia.jquery.js" type="text/javascript"></script>

        <script type="text/javascript">
            
//            $(document).ready(function(){
//                       
//               
//                alert($(document).width());
//                
//                
//            });
//            
//            $(window).resize(function(){
//                var width=$(document).width();
//                var height=$(document).height();
//                    
//                $(document).css("width", width);
//                $(document).css("height", height);
//
//                
//            });

//                        function apri_outlet(){
//                            $('#hidden_outlet').stop().animate();
//                            $('#opened_outlet').stop().animate();
//            
//                            $("#hidden_outlet").animate({"width":"50%"},300);
//                            $("#opened_outlet").animate({"left":"30px"},300);
//            
//                        }
//                          
//                        function chiudi_outlet(){
//                            $('#hidden_outlet').stop().animate();
//                            $('#opened_outlet').stop().animate();
//            
//                            $("#hidden_outlet").animate({"width":"0px"},300); 
//                            $("#opened_outlet").animate({"left":"0px"},300);
//            
//                        }
           
        </script>
    </head> 
    <body>


        <div id="left">
        </div>


        <div id="right">

            <div id="formazione">

                <!--                    <div id="orologi">
                                        <a>
                                            <img src="">
                                        </a>
                                    </div>
                
                                    <div id="gioielli">
                                        <a>
                                            <img src="">
                                        </a>
                                    </div>
                
                                    <div id="img1">
                                        <img src="">
                                    </div>
                
                                    <div id="img2">
                                        <img src="">
                                    </div>
                
                                    <div id="img3">
                                        <img src="">
                                    </div>
                
                                    <div id="img4">
                                        <img src="">
                                    </div>-->


            </div>

            <div id="regali">
            </div>

            <div id="outlet" onmouseover="apri_outlet()" onmouseout="chiudi_outlet()">
                <div id="hidden_outlet" >
                </div>
                <div id="opened_outlet">
                </div>
            </div>
        </div>










        <!--        <div id="background-slideshow">
                    </div>-->

        <!--        <div id="layerslider" >
        
                     SLIDE 1 
                    <div class="ls-layer" rel="slidedelay: 5000"  >
        
        
                        <img class="ls-s2" src="img/polaroid.png" alt="sublayer" rel="slidedirection: bottom; durationin: 3000; easingin: easeOutExpo; delayin: 1500; delayout: 50">
        
                    </div>
        
                     SLIDE 2 
                    <div class="ls-layer" rel="slidedelay: 5000"  >
        
        
                        <img class="ls-s2" src="img/polaroid8.png" alt="sublayer" rel="slidedirection: top;delayin: 1400; easingin: easeOutBack">
        
                    </div>
        
                                  SLIDE 3 
                                <div class="ls-layer" rel="slidedelay: 5000">
                    
                                    <img class="ls-s2" src="img/3.png" alt="sublayer" rel="slidedirection: bottom;">
                    
                                    <img style="z-index: 1;" class="ls-s2" src="img/bdv5.png"  alt="sublayer" rel="slidedirection: right; durationin: 4000; easingin: easeOutExpo; delayin: 1500; delayout: 50">
                                    <img class="ls-s2" src="img/computer.png" alt="sublayer" rel="slidedirection: bottom; durationin: 4000; easingin: easeOutExpo; delayin: 1500; delayout: 50">
                                    <img class="ls-s1" src="img/devoavvisa.png" alt="sublayer" rel="slidedirection: right;delayin: 1400; easingin: easeOutBack">
                                    <img class="ls-s4" src="img/omino2.png" alt="sublayer"  rel="slidedirection: left;delayin: 900; ">
                                    <img class="ls-s2" src="img/hounnuovo.png" alt="sublayer" rel="slidedirection: right;delayin: 1400; easingin: easeOutBack">
                                </div>
                    
                                  SLIDE 4 
                                <div class="ls-layer" rel="slidedelay: 5000">
                    
                    
                                    <img class="ls-s2" src="img/4.png"  alt="sublayer" rel="slidedirection: top;">
                    
                                    <img class="ls-s4" src="img/bdv6.png"  alt="sublayer" rel="slidedirection: top; durationin: 5000; easingin: easeOutExpo; delayin: 1500; delayout: 50">
                                    <img class="ls-s4" src="img/bdv7.png" alt="sublayer" rel="slidedirection: top; durationin: 4500; easingin: easeOutExpo; delayin: 1500; delayout: 50">
                                    <img class="ls-s2" src="img/fbme.png"  alt="sublayer" rel="slidedirection: top; durationin: 1000; easingin: easeOutExpo; delayin: 1500; delayout: 50">
                                    <img class="ls-s2" src="img/skme.png" alt="sublayer" rel="slidedirection: top; durationin: 2000; easingin: easeOutExpo; delayin: 1500; delayout: 50">
                                    <img class="ls-s1" src="img/maeimpo.png" alt="sublayer" rel="slidedirection: right;delayin: 1400; easingin: easeOutBack">
                                    <img class="ls-s4" src="img/omino3.png" alt="sublayer"  rel="slidedirection: left;delayin: 900; ">
                                    <img class="ls-s5" src="img/omino4.png" alt="sublayer"  rel="slidedirection: right;delayin: 1400; ">
                                    <img class="ls-s2" src="img/vorreiaver.png" alt="sublayer" rel="slidedirection: right;delayin: 1400; easingin: easeOutBack">
                                </div>
                    
                                 SLIDE 5 
                                <div class="ls-layer" rel="slidedelay: 5000"> 
                    
                    
                                    <img class="ls-s1" src="img/freccia_iogo.png" alt="sublayer" rel="slidedirection: right;">
                                    <img class="ls-s4" src="img/logo_iogo.png" alt="sublayer"  rel="slidedirection: left;delayin: 900; ">
                                    <img class="ls-s2" src="img/daoggigest.png" alt="sublayer" rel="slidedirection: right;delayin: 1400; easingin: easeOutBack">
                                </div>
                    
                                 SLIDE 6 
                                <div class="ls-layer" rel="slidedelay: 5000">
                    
                    
                    
                                    <img class="ls-s2" src="img/swirl.png"  alt="sublayer" rel="slidedirection: bottom; durationin: 1000; easingin: easeOutExpo; delayin: 1500; delayout: 50">
                                    <img class="ls-s2" src="img/coseiogo.png"  alt="sublayer" rel="slidedirection: bottom; durationin: 1000; easingin: easeOutExpo; delayin: 1500; delayout: 50">
                                    <img class="ls-s2" src="img/busta.png"  alt="sublayer" rel="slidedirection: bottom; durationin: 3000; easingin: easeOutExpo; delayin: 1500; delayout: 50">
                                    <img class="ls-s2" src="img/iogologo.png" alt="sublayer" rel="slidedirection: bottom; durationin: 1000; easingin: easeOutExpo; delayin: 1500; delayout: 50">
                                    <img class="ls-s2" src="img/icone.png"  alt="sublayer" rel="slidedirection: top; durationin: 1000; easingin: easeOutExpo; delayin: 1500; delayout: 50">
                                    <img class="ls-s7" src="img/telefono_1.png" alt="sublayer"  rel="slidedirection: top;durationin: 4500; easingin: easeOutExpo; delayin: 1500; delayout: 50 ">
                                    <img class="ls-s2" src="img/pc.png" alt="sublayer" rel="slidedirection: bottom; durationin: 2000; easingin: easeOutExpo; delayin: 1500; delayout: 50">
                                    <img class="ls-s1" src="img/unservizio.png" alt="sublayer" rel="slidedirection: right;delayin: 1400; easingin: easeOutBack">
                                    <img class="ls-s4" src="img/levoluzione.png" alt="sublayer"  rel="slidedirection: left;delayin: 900; ">
                                    <img class="ls-s5" src="img/telefonino.png" alt="sublayer"  rel="slidedirection: top;delayin: 1400; durationin: 5000; easingin: easeOutExpo; delayin: 1500; delayout: 50">
                                </div>
                    
                                   SLIDE  7
                                <div class="ls-layer" rel="slidedelay: 5000">
                    
                    
                    
                                    <img class="ls-s3" src="img/passo1.png"  alt="sublayer" rel="slidedirection: bottom; durationin: 1000; easingin: easeOutExpo; delayin: 1500; delayout: 50">
                                    <img class="ls-s3" src="img/passo2.png" alt="sublayer" rel="slidedirection: bottom; durationin: 2000; easingin: easeOutExpo; delayin: 1500; delayout: 50">
                                    <img class="ls-s3" src="img/passo3.png"  alt="sublayer" rel="slidedirection: bottom; durationin: 3000; easingin: easeOutExpo; delayin: 1500; delayout: 50">
                                    <img class="ls-s3" src="img/codice.png" alt="sublayer" rel="slidedirection: left; durationin: 4000; easingin: easeOutBack; delayin: 1500; delayout: 50">
                    
                                </div>
                    
                                   SLIDE 8 
                                <div class="ls-layer" rel="slidedelay: 5000" id="fake">
                    
                    
                                    <img class="ls-s2" src="img/8.png"  alt="sublayer" rel="slidedirection: right; durationin: 1000; easingin: easeOutExpo; delayin: 1500; delayout: 50">
                                    <img class="ls-s2" src="img/computer8.png"  alt="sublayer" rel="slidedirection: right; durationin: 1000; easingin: easeOutExpo; delayin: 1500; delayout: 50">
                                    <img class="ls-s2" src="img/tablet.png" alt="sublayer" rel="slidedirection: right; durationin: 1000; easingin: easeOutExpo; delayin: 1500; delayout: 50">
                                    <img class="ls-s1" src="img/smartphone.png" alt="sublayer" rel="slidedirection: left;delayin: 1400; easingin: easeOutBack">
                                    <img class="ls-s4" src="img/omino11.png" alt="sublayer"  rel="slidedirection: left;delayin: 900; ">
                                    <img class="ls-s5" src="img/omino12.png" alt="sublayer"  rel="slidedirection: right;delayin: 1400; ">
                                    <img class="ls-s5" src="img/omino13.png" alt="sublayer"  rel="slidedirection: bottom;delayin: 1400; ">
                                    <img class="ls-s2" src="img/ovunqueti.png" alt="sublayer" rel="slidedirection: right;delayin: 1400; easingin: easeOutBack">
                                </div>
        
                </div>-->


        <!--       <div id="footer">
        
                    <div id="barra_footer">
        
                        <div id="partners"><p>&bull; Partners</p></div>
        
                        <div id="servizi"><p>&bull; Partners</p></div>
        
                        <div id="logo"></div>
        
                        <div id="facebook"><p>&bull; Partners</p></div> 
        
                        <div id="showroom"><p>&bull; Partners</p></div>
        
                    </div> 
        
        
                    <div id="lista_nozze">   
                        <p>MARTINO</p>
                    </div>
        
        
                </div>-->



    </body>    
</html>