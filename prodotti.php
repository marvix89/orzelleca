<?php
//$m = $_GET['m'];
//$f = $_GET['f'];
//$prezzo = $_GET['prezzo'];
//$evento = $_GET['evento'];
//
//if (trim($m) == "true")
//    $sesso = "M";
//else if (trim($f) == "true")
//    $sesso == "F";
//else
//    $sesso = "";
//
//if (trim($prezzo) == "")
//    $prezzo = "";
//
//if (trim($evento) == "")
//    $evento = "";
//
//$range_prezzo = explode(";", $prezzo);
//$data = new MysqlClass();
//$data->connetti();
//$querySQL = "select * from prodotti where sesso='".$sesso."' AND prezzo < ".$prezzo[0]." AND prezzo > ".$prezzo[1].
//        "AND evento='".$evento."'";
//$post_sql = $data->query($querySQL);
//if (mysql_num_rows($post_sql) > 0) {
//    while ($post_obj = $data->estrai($post_sql)) {
        ?>
        <ul id="itemContainer">
            <?php
            for ($i = 1; $i < 100; $i++) {
                ?>

                <li class="prodotto" onclick="apri_vetrina(/*inserire id*/)" >
                    <div class="img_prodotto" style="background:url('img/es2.jpg') no-repeat center center;  background-size:contain;">
                    </div>
                    <div class="descrizione_prodotto">
                        <p class="nome_prodotto">Portacandela Lalique</p>
                        <p class="prezzo_prodotto">&#8364; 54,00</p>
                        <p class="sconto_prodotto"><label>&#8364; 75,00</label>&nbsp; Sconto 15%</p>
                        <p class="offerta_prodotto">Offerta valida fino al 30 Giugno 2013 </p>
                    </div>
                </li>

            <?php } ?>
</ul>

<div class="holder" id="holder"></div>
