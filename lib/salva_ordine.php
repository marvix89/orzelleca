<?php

$id_ordine = $_GET['id'];
$id = $_GET['id_lista'];

$nome = htmlentities($_GET['nome'], ENT_QUOTES, 'ISO-8859-1');
$email = htmlentities($_GET['email'], ENT_QUOTES, 'ISO-8859-1');
$tipo = $_GET['tipo'];

include "funzioni.php";

$data = new MysqlClass();
$data->connetti();



$SqlString = "SELECT * FROM liste WHERE id =" . $id;
$post_sql = $data->query($SqlString);
if (mysql_num_rows($post_sql) > 0) {

    while ($post_obj = $data->estrai($post_sql)) {
        $nome_completo = $post_obj->lui . " " . $post_obj->lei;
        if ($post_obj->negozio == "A") {
            $negozio = "Avellino";
            $to = "avellino@orzellecagioielli.it";
            $mittente = "From: Orzelleca Gioielli Avellino <avellino@orzellecagioielli.it> \r\n";
            $dati_bancari = "<b>IBAN : </b> I T96 J 05034 15100 000000020339<br/>
                             <b>BIC-SWIFT(International transfer) : </b> NVRBIT2N470 <br/>
                             <b>BANCO POPOLARE</b> 
                             c/c 20339 intestato a ISI s.r.l<br>";
        } else if ($post_obj->negozio == "B") {
            $to = "benevento@orzellecagioielli.it";
            $mittente = "From: Orzelleca Gioielli Benevento <benevento@orzellecagioielli.it> \r\n";
            $negozio = "Benevento";
            $dati_bancari = "<b>IBAN : </b> IT69 U 08997 75280 006000122668<br/>
                             <b>BIC-SWIFT(International transfer) : </b> CCRTIT2TL00 <br/>
                             <b>BCC DI SAN MARCO DEI CAVOTI E DEL SANNIO CALVI SOCIET&Agrave;</b> 
                             c/c 006000122668 intestato a ISI s.r.l<br>";
        }
    }
    $dati_postali = "<b>C/C n. :</b> 1000708444<br>
    <b>intestazione:</b> ISI SRL<br>";
    $mittente .= "MIME-Version: 1.0\n";
    $mittente .= "Content-Type: text/html; charset=\"iso-8859-1\"\n";
    $mittente .= "Content-Transfer-Encoding: 7bit\n\n";



    $email1 = "Lista nozze di " . $nome_completo . "<br><br><br>";

    if ($tipo == "B") {
        $email1 .="Dati del CC Bancario del negozio di " . $negozio . " per l'ordine n." . $id_ordine . "<br/><br/><br/>";
        $email1.=$dati_bancari;
            $subject1 = "Richiesta dati CC Bancario - Ordine n." . $id_ordine . " - " . $nome_completo;

    } else if ($tipo == "P") {
            $subject1 = "Richiesta dati CC Postale - Ordine n." . $id_ordine . " - " . $nome_completo;

        $email1 .="Dati del CC Postale del negozio di " . $negozio . " per l'ordine n." . $id_ordine . "<br>";
        $email1.=$dati_postali;
    }

    $SqlString = "SELECT totale FROM ordini WHERE id =" . $id_ordine;
    $post_sql = $data->query($SqlString);
    if (mysql_num_rows($post_sql) > 0) {

        while ($post_obj = $data->estrai($post_sql)) {
            $totale = $post_obj->totale;
        }
    }

    $email1.="Importo Euro:	<b>" . $totale . "</b><br><br>";

    $email1.="Per allegare un bigliettino di Auguri per gli sposi invia un messaggio a questo indirizzo: <a href='mailto:" . $to . "'>" . $to . "</a>";

    if (mail($email, $subject1, $email1, $mittente) == false) {
        $flag = "<div id='email_inviata'>Errore l'email non è stata inviata!</div><br/><br/><div class='home5' onclick='torna_home()'></div>";
    } else {
        $flag = "<div id='email_inviata'>Email Inviata con Successo!<br/><br/><label>Controlla la tua casella postale per Scegliere il metodo di Pagamento</label></div>    <div class='home5' onclick='torna_home()'></div>";
    }

    $SqlString = "update ordini set pagamento='" . $tipo . "' WHERE id =" . $id_ordine;
    $data->query($SqlString);

    echo $flag;
}

$data->disconnetti();
?>




