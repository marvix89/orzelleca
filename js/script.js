// ****************************
// SWAP IMMAGE SU PULSANTI
// ****************************

function MM_swapImgRestore() { //v3.0
    var i,x,a=document.MM_sr;
    for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_preloadImages() { //v3.0
    var d=document;
    if(d.images){
        if(!d.MM_p) d.MM_p=new Array();
        var i,j=d.MM_p.length,a=MM_preloadImages.arguments;
        for(i=0; i<a.length; i++)
            if (a[i].indexOf("#")!=0){
                d.MM_p[j]=new Image;
                d.MM_p[j++].src=a[i];
            }
    }
}

function MM_findObj(n, d) { //v4.01
    var p,i,x;
    if(!d) d=document;
    if((p=n.indexOf("?"))>0&&parent.frames.length) {
        d=parent.frames[n.substring(p+1)].document;
        n=n.substring(0,p);
    }
    if(!(x=d[n])&&d.all) x=d.all[n];
    for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
    for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
    if(!x && d.getElementById) x=d.getElementById(n);
    return x;
}

function MM_swapImage() { //v3.0
    var i,j=0,x,a=MM_swapImage.arguments;
    document.MM_sr=new Array;
    for(i=0;i<(a.length-2);i+=3)
        if ((x=MM_findObj(a[i]))!=null){
            document.MM_sr[j++]=x;
            if(!x.oSrc) x.oSrc=x.src;
            x.src=a[i+2];
        }
}

function GetXmlHttpObject(){
    var xmlHttp=null;
    try{
        // Firefox, Opera 8.0+, Safari
        xmlHttp=new XMLHttpRequest();
    }catch (e){
        //Internet Explorer
        try{
            xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
        }
        catch (e){
            xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
    }
    if(xmlHttp==null){
        alert("errore, il tuo browser non supporta ajax");
        return;
    }
    return xmlHttp;
} 

function chisiamo(){
    
    $("#showcase").awShowcase(
    {
        width:					460,
        height:					465,
        auto:					false,
        interval:				3000,
        continuous:				false,
        loading:				true,
        tooltip_width:			200,
        tooltip_icon_width:		32,
        tooltip_icon_height:	32,
        tooltip_offsetx:		18,
        tooltip_offsety:		0,
        arrows:					true,
        buttons:				true,
        btn_numbers:			true,
        keybord_keys:			true,
        mousetrace:				false,
        pauseonover:			true,
        transition:				'vslide', /* vslide/hslide/fade */
        transition_speed:		500,
        show_caption:			'onload', /* onload/onhover/show */
        thumbnails:				false,
        thumbnails_position:	'outside-last', /* outside-last/outside-first/inside-last/inside-first */
        thumbnails_direction:	'vertical', /* vertical/horizontal */
        thumbnails_slidex:		1 /* 0 = auto / 1 = slide one thumbnail / 2 = slide two thumbnails / etc. */
    });
    
//    var cur=0;
//     
//    $("#next").click(function(e){ 
//        cur++;
//        if(cur==1){
//            $("#chi1").stop().animate({
//                "left":"-530px",
//                "opacity":"0"
//            }, 1000);
//            $("#chi1").hide(0);
//          
//            $("#chi2").show(0);
//
//            $("#chi2").stop().animate({
//                "left":"25px",
//                "opacity":"1"
//            }, 1000);
//        
//            $("#prec").show(0);
//        }
//       
//        if(cur==2){
//            $("#chi2").stop().animate({
//                "left":"-530px",
//                "opacity":"0"
//            }, 1000);
//            $("#chi2").hide(0);
//          
//            $("#chi3").show(0);
//
//            $("#chi3").stop().animate({
//                "left":"25px",
//                "opacity":"1"
//            }, 1000);
//            $("#next").hide(0);
//        }
//
//    });
//
//    $("#prec").click(function(e){
//        cur--;
//        if(cur==1){
//            $("#chi3").stop().animate({
//                "left":"530px",
//                "opacity":"0"
//            }, 1000);
//            $("#chi3").hide(0);
//          
//            $("#chi2").show(0);
//
//            $("#chi2").stop().animate({
//                "left":"25px",
//                "opacity":"1"
//            }, 1000);
//            $("#next").show(0);
//        }
//      
//        if(cur==0){
//            $("#chi2").stop().animate({
//                "left":"530px",
//                "opacity":"0"
//            }, 1000);
//            $("#chi2").hide(0);
//          
//            $("#chi1").show(0);
//
//            $("#chi1").stop().animate({
//                "left":"25px",
//                "opacity":"1"
//            }, 1000);
//            $("#prec").hide(0);
//        }   
//
//    });   
}

function apri_outlet(){
    $("#nome").css({
        "color":"white"
    });
    $("#prezzo").css({
        "color":"white"
    });

    $('#hidden_out').stop().animate();
    $('#opened_out').stop().animate();
            
    $("#hidden_out").animate({
        "left":"0px"
    },300);
    $("#opened_out").animate({
        "left":"80px"
    },300);
    
            
}
                          
function chiudi_outlet(){
    $("#nome").css({
        "color":"#353332"
    });
    $("#prezzo").css({
        "color":"#353332"
    });
    $('#hidden_out').stop().animate();

    $('#opened_out').stop().animate();
            
    $("#hidden_out").animate({
        "left":"-150px"
    },300); 
    $("#opened_out").animate({
        "left":"0px"
    },300);

}
function formazione_open(){
    $("#hidden_form").stop().animate({
        "left":"0px"
    },300);
    $("#hidden_form1").stop().animate({
        "right":"0px"
    },300);         
}
                          
function formazione_close(){            
    $("#hidden_form").stop().animate({
        "left":"-150px"
    },300); 
    $("#hidden_form1").stop().animate({
        "right":"-150px"
    },300);
}

function pulsanti_on(){
      
//    $('.categorie').stop().fadeIn(0);  
}
function pulsanti_off(){
//    $('.categorie').stop().fadeOut(1000);

}
function apri_categoria(id){
    var link;
    
    switch(id){
        case "cat1" :
            link="partners.php";
            break;
        case "cat2" :
            link="servizi.php";
            break;
        case "cat4" :
            link="showroom.php";
            break;
        case "orologi" :
            link="orologi.php";
            break;
        case "gioielli" :
            link="gioielli.php";
            break;
        case "liste"   :
            link="lista.php?lista=M";
            break;
        case "regali"   :
            link="lista.php?lista=C";
            break
        case "cat3" :
            link="chisiamo.php"
            break;
        default :
            link="showroom.php";
            break;
    }

    
    xmlHttp = GetXmlHttpObject();
    
    xmlHttp.onreadystatechange=function(){

        if(xmlHttp.readyState==4 && xmlHttp.status==200){
            $("#left").stop().hide(0);

            document.getElementById("left").innerHTML=xmlHttp.responseText;
            $("#left").stop().fadeIn(1000);	
            if(id=="cat3") 
                chisiamo();
        }
    }
    xmlHttp.open("GET", link, true);
    xmlHttp.send();
      
   
}

function apri_partners(id){
    var link;
    if(id=="c1")
        link="partners_gioielli.php";
    else if(id=="c2")
        link="partners_orologi.php";
    else
        link="cristalli.php";
    
    xmlHttp = GetXmlHttpObject();
    
    xmlHttp.onreadystatechange=function(){

        if(xmlHttp.readyState==4 && xmlHttp.status==200){
            $("#left").stop().hide(0);
            document.getElementById("left").innerHTML=xmlHttp.responseText;
            $("#left").stop().fadeIn(1000);	
        }
    }
    xmlHttp.open("GET", link, true);
    xmlHttp.send();

   

}

function apri_ricerca(flag){
    if(flag=="true"){
        var M=document.getElementById("M").checked;
        var F=document.getElementById("F").checked;
        var evento= document.getElementById("evento").value;
        var prezzo=document.getElementById("Slider2").value;
    }
    xmlHttp = GetXmlHttpObject();
    
    xmlHttp.onreadystatechange=function(){

        if(xmlHttp.readyState==4 && xmlHttp.status==200){

            document.getElementById("left").innerHTML=xmlHttp.responseText;
            $(function(){
                var w=$(".left").width();
                var h=$(".left").height();
        
                var  elementw = Math.floor(w/350);
                var elementh=Math.floor(h/150); 
    
                var numel=elementw*elementh;
        
                /* initiciate jPages */
                $(".holder").jPages({
                    containerID : "itemContainer",
                    animation : "fadeInDown",
                    perPage : numel,
                    scrollBrowse : true,
                    keyBrowse : true,
                    callback : nascondi
            
                });
   
        
                $(window).resize(function(e){
 
                    var w=$(".left").width();
                    var h=$(".left").height();
                    var  elementw = Math.floor(w/350);
                    var elementh=Math.floor(h/150); 
    
                    var numel=elementw*elementh;
            
                    $("div.holder").jPages("destroy").jPages({
                        containerID   : "itemContainer",
                        animation : "fadeInDown",
                        perPage : numel,
                        scrollBrowse : true,
                        keyBrowse : true,
                        callback : nascondi
                    });
          

            
                });
      

            });
	
        }
    }
    xmlHttp.open("GET", "prodotti.php?m="+M+"&f="+F+"&evento="+evento+"&prezzo="+prezzo, true);
    xmlHttp.send();
}

function torna_home(){
    
    xmlHttp = GetXmlHttpObject();
    
    xmlHttp.onreadystatechange=function(){

        if(xmlHttp.readyState==4 && xmlHttp.status==200){
			
            document.getElementById("left").innerHTML=xmlHttp.responseText;
		
            var jmpressOpts	= {
                animation		: {
                    transitionDuration : '0.8s'
                }
            };

            $("#slides").slidesjs({
                  width: 700,
                  height: 595,
                  navigation: {
                    active: false,
                      // [boolean] Generates next and previous buttons.
                      // You can set to false and use your own buttons.
                      // User defined buttons must have the following:
                      // previous button: class="slidesjs-previous slidesjs-navigation"
                      // next button: class="slidesjs-next slidesjs-navigation"
                    effect: "slide"
                      // [string] Can be either "slide" or "fade".
                  },
                  pagination: {
                    active: false,
                      // [boolean] Create pagination items.
                      // You cannot use your own pagination. Sorry.
                    effect: "slide"
                      // [string] Can be either "slide" or "fade".
                  },
                  play: {
                    active: false,
                      // [boolean] Generate the play and stop buttons.
                      // You cannot use your own buttons. Sorry.
                    effect: "slide",
                      // [string] Can be either "slide" or "fade".
                    interval: 5000,
                      // [number] Time spent on each slide in milliseconds.
                    auto: true,
                      // [boolean] Start playing the slideshow on load.
                    swap: true,
                      // [boolean] show/hide stop and play buttons
                    pauseOnHover: false,
                      // [boolean] pause a playing slideshow on hover
                    restartDelay: 2500
                      // [number] restart delay on inactive slideshow
                  }
                });

        }
    }
    xmlHttp.open("GET", "slideshow.php", true);
    xmlHttp.send();
    
}

function apri_vetrina(id){
    
    xmlHttp = GetXmlHttpObject();
    
    xmlHttp.onreadystatechange=function(){

        if(xmlHttp.readyState==4 && xmlHttp.status==200){
            $("#left").stop().hide(0);

            document.getElementById("left").innerHTML=xmlHttp.responseText;
            $('.nyroModal').nyroModal();	
            $("#left").stop().fadeIn(1000);	

        }
    }
    xmlHttp.open("GET", "vetrina.php?id="+id, true);
    xmlHttp.send();
}

$(document).ready(function(e){
 
    var w=$(window).width();
    var h=$(window).height();
//    $(".left").css({
//        "width":w-300,
//        "height":h-55
//    });
    //   if($(window).height()>=711){
    $("#logo_orz").css({
        "left":"50%"
    });
                    
    $("#cat1").css({
        "left":"30px"
    });
    $("#cat2").css({
        "left":"250px"
    });
    $("#cat3").css({
        "right":"255px"
    });
    $("#cat4").css({
        "right":"30px"
    });
//    }
//    else {
//        $("#logo_orz").css({
//            "left":"35%"
//        });   
//        $("#cat1").css({
//            "left":"20px"
//        });
//        $("#cat2").css({
//            "left":"150px"
//        });
//        $("#cat3").css({
//            "right":"439px"
//        });
//        $("#cat4").css({
//            "right":"315px"
//        });
//    }

});
         
$(window).resize(function(e){
 
    var w=$(window).width();
    var h=$(window).height();        
        
        
//    $(".left").css({
//        "width":w-300,
//        "height":h-55
//    });
                
//    if($(window).height()>=711){
//        $("#logo_orz").stop().animate({
//            "left":"50%"
//        });
//                    
//        $("#cat1").stop().animate({
//            "left":"30px"
//        });
//        $("#cat2").stop().animate({
//            "left":"250px"
//        });
//        $("#cat3").stop().animate({
//            "right":"255px"
//        });
//        $("#cat4").stop().animate({
//            "right":"30px"
//        });
//    }
//    else {
//        $("#logo_orz").stop().animate({
//            "left":"35%"
//        });   
//        $("#cat1").stop().animate({
//            "left":"20px"
//        });
//        $("#cat2").stop().animate({
//            "left":"150px"
//        });
//        $("#cat3").stop().animate({
//            "right":"439px"
//        });
//        $("#cat4").stop().animate({
//            "right":"315px"
//        });
//    }

});    

function nascondi(){
    $(".holder a").hide(0);
    $(".holder span").hide(0);
    $(".jp-previous").show(0);
    $(".jp-next").show(0);
}

function apri_lista(tipo){   
    var link;
    if(tipo=="c5")
        link="lista.php?lista=R";
    else if(tipo=="c6")
        link="lista.php?lista=C";
    else
        link="lista.php?lista=M";
    
    xmlHttp = GetXmlHttpObject();
    
    xmlHttp.onreadystatechange=function(){

        if(xmlHttp.readyState==4 && xmlHttp.status==200){
            $("#left").stop().hide(0);
            document.getElementById("left").innerHTML=xmlHttp.responseText;
            $("#left").stop().fadeIn(1000);	
        }
    }
    xmlHttp.open("GET", link, true);
    xmlHttp.send(); 
}

function log(flag,id){
    var link; 
    if(flag=="n")
        link="lista_interna.php?id="+id;
    else
        link="log.php?id="+id;
    
    xmlHttp = GetXmlHttpObject();
    
    xmlHttp.onreadystatechange=function(){

        if(xmlHttp.readyState==4 && xmlHttp.status==200){
            $("#left").stop().hide(0);

            document.getElementById("left").innerHTML=xmlHttp.responseText;
            $("#left").stop().fadeIn(1000);	
            
        }
    }
    xmlHttp.open("GET", link, true);
    xmlHttp.send();
}

function open_lista(pass){    
    var flag_pass="";
    xmlHttp = GetXmlHttpObject();

    xmlHttp.onreadystatechange=function(){

        if(xmlHttp.readyState==4 && xmlHttp.status==200){
         
              
            flag_pass=xmlHttp.responseText;
          
            var flag_array = flag_pass.split(" ");
            
            if(flag_array[0]=="S"){ 
                 
                xmlHttp.onreadystatechange=function(){

                    if(xmlHttp.readyState==4 && xmlHttp.status==200){
                
             
                
                        $("#left").stop().hide(0);
                        document.getElementById("left").innerHTML=xmlHttp.responseText;
                        $("#left").stop().fadeIn(1000);	
            
                    }
                }
    
                xmlHttp.open("GET", "lista_interna.php?id="+flag_array[1]+"&nome_completo="+flag_array[2], true);
                xmlHttp.send();

               
               
               
            }else return;

        }
    }
    xmlHttp.open("GET", "lib/login.php?pass="+pass, true);
    xmlHttp.send();
} 


function check_form(nome,email,max,id,nome_completo){
    var flag=false;
    var parametri="lib/salva_lista.php?";
    parametri+="id="+id+"&nome="+nome+"&email="+email+"&num_prodotti="+max+"&nome_completo="+nome_completo;
                
    if(nome==""){
        alert("inserisci il nome")
        return false;
    }
    if(email==""){
        alert("inserisci un email valida")
        return false;
    }
    for(var i=1;i<max+1;i++){
        if(document.getElementById(i).checked == true){
            parametri+="&"+i+"="+document.getElementById(i).checked+"&check"+i+"="+document.getElementById("check"+i).value;
            parametri+="&prezzo"+i+"="+document.getElementById("prezzo"+i).value;
            flag=true;   
        }
                       
    }
    if(!flag)
        alert("spunta almeno un articolo");

    if(flag){
    
    
        xmlHttp = GetXmlHttpObject();
    
        xmlHttp.onreadystatechange=function(){

            if(xmlHttp.readyState==4 && xmlHttp.status==200){
         
            
                document.getElementById("left").innerHTML=xmlHttp.responseText;
         
            
            }
        }
        xmlHttp.open("GET",parametri, true);
        xmlHttp.send();
    }
}


function check_ordine(nome,email,id_ordine,tipo,id_lista){
   
    xmlHttp = GetXmlHttpObject();
    
    xmlHttp.onreadystatechange=function(){

        if(xmlHttp.readyState==4 && xmlHttp.status==200){
           
            $("#left").stop().hide(0);
            document.getElementById("left").innerHTML=xmlHttp.responseText;
            $("#left").stop().fadeIn(1000);	
            
        }
    }
    xmlHttp.open("GET", "lib/salva_ordine.php?nome="+nome+"&email="+email+"&id="+id_ordine+"&tipo="+tipo+"&id_lista="+id_lista, true);
    xmlHttp.send();
}