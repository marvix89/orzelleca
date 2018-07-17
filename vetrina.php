
<?php
//interrogazione al database
?>

<div id="vetrina" >

    <div id="img_oggetto" style="background:url('img/img-esempio.jpg') no-repeat left center; background-size: contain; ">
    </div>

    <div id="nome_oggetto">
        <p>Porta Candele Lalique</p>
    </div>

    <div id="prezzo_oggetto">
        <p>&#8364; 54<label>,00</label></p>
    </div>

    <div id="sconto_oggetto">
        <p><label>&#8364; 75,00</label>&nbsp;  Sconto 15%</p>
    </div>
    <div id="offerta_oggetto">
        <p id="offerta">Offerta valida fino al 30 Giugno 2013</p>
    </div>
    <div id="prenota"  onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('img_prenota','','img/prenotaon.jpg',1)">
        <a href="prenota.php" class="nyroModal">
            <img src="img/prenotaoff.jpg" id="img_prenota" name="img_prenota">
        </a>
    </div>

    <div id="descrizione">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut pharetra lectus elit, vitae pulvinar mauris. Cras
            tempor, risus vel mattis blandit, turpis lectus dapibus neque, eu iaculis nisi orci ut mauris. Duis laoreet ultricies
            vehicula. Aliquam et luctus eros. Mauris eget justo libero. Nunc pharetra ullamcorper urna in vulputate. Nulla
            est risus, cursus eu blandit ornare, semper congue lectus. Quisque quis velit nisi, vel aliquet nisi.</p>
    </div>

    <div class="prec" style="float:left;margin-left: 210px;">
    </div>
    <div style="float:left;margin-left: 20px;" class="home3" onclick="torna_home()">
    </div>
</div> 

<?php ?>

 