<?php

$id_ordine = $_GET[id];


include "funzioni.php";
$data = new MysqlClass();
$data->connetti();
$nome = htmlentities($_GET['nome'], ENT_QUOTES, 'ISO-8859-1');
$email = htmlentities($_GET['email'], ENT_QUOTES, 'ISO-8859-1');
$num_prodotti = $_GET['num_prodotti'];
$nome_completo = $_GET['nome_completo'];
$lista = " Lista Prodotti<br/><br/>";

$lista.="<table  style='border:1px solid #e3e3e3;text-align:center;'><tr><th style='border:1px solid #e3e3e3;'>&nbsp;</th><th style='border:1px solid #e3e3e3;'>Codice</th><th style='border:1px solid #e3e3e3;'>Articolo</th><th style='border:1px solid #e3e3e3;'>Descrizione</th><th style='border:1px solid #e3e3e3;'>Numero Pezzi</th><th style='border:1px solid #e3e3e3;'>Prezzo</th></tr>";
$totale = 0;

for ($i = 1; $i < $num_prodotti + 1; $i++) {

    if ($_GET[$i] != "true")
        $check = "off";
    else
        $check = "on";

    if ($check == "on") {
        $prezzo = $_GET['prezzo' . $i];
        $totale+=$prezzo;
    }
}
//inserisco l ordine
$SqlString = "insert into ordini(nome,data,totale,id_lista,email,pagato) values('" . $nome . "',now()," . $totale . "," . $id_ordine . ",'" . $email . "',0)";
$data->query($SqlString);

// LEGGO ULTIMO ID INSERITO
$SqlString = "SELECT LAST_INSERT_ID() AS ID";
$post_sql = $data->query($SqlString);
if (mysql_num_rows($post_sql) > 0) {
    while ($post_obj = $data->estrai($post_sql)) {
        $id_ordine = $post_obj->ID;
    }
}

for ($i = 1; $i < $num_prodotti + 1; $i++) {

    if ($_GET[$i] != "true")
        $check = "off";
    else
        $check = "on";

    if ($check == "on") {
        $id_prodotto = $_GET['check' . $i];
        $prezzo = $_GET['prezzo' . $i];
        

        $SqlString = "SELECT * FROM prodotti_liste WHERE id =" . $id_prodotto;
        $post_sql = $data->query($SqlString);
        if (mysql_num_rows($post_sql) > 0) {

            while ($post_obj = $data->estrai($post_sql)) {
                $lista.="<tr><td style='border:1px solid #e3e3e3;'><b>" . $i . "</b></td>";
                $lista.="<td style='border:1px solid #e3e3e3;'> " . $post_obj->codice . "</td> <td style='border:1px solid #e3e3e3;'>" . $post_obj->articolo . "</td><td style='border:1px solid #e3e3e3;'>" .
                        $post_obj->descrizione . "</td><td style='border:1px solid #e3e3e3;'>" . $post_obj->pezzi . "</td><td style='border:1px solid #e3e3e3;'>" . $post_obj->prezzo . "</td></tr><br/><br/>";

                $SqlString = "insert into dettaglio_ordini(id_ordine,codice,articolo,descrizione,pezzi,stato,prezzo)
                    values(" . $id_ordine . ",'" . $post_obj->codice . "','" . $post_obj->articolo . "','" . $post_obj->descrizione . "',
                        '" . $post_obj->pezzi . "'," . $post_obj->stato . "," . $post_obj->prezzo . ")";
                $data->query($SqlString);
            }
        }
    }
}

$lista.="<tr><td  colspan=5 style='border:1px solid #e3e3e3;'>Totale</td><td style='border:1px solid #e3e3e3;'><b>" . $totale . "</b></td></tr></table>";

$subject1 = "NOTIFICA: Richiesta Lista " . $nome_completo . " da " . $nome;
$email1 = "Email: " . $email . "<br/> " . $nome . " è interessato ai seguenti prodotti : <br/><br/>" . $lista;

$to = "avellino@orzellecagioielli.it";  
$dati_bancari = "<b>IBAN : </b> I T96 J 05034 15100 000000020339<br/>
                <b>BIC-SWIFT(International transfer) : </b> NVRBIT2N470 <br/>
                <b>BANCO POPOLARE</b> 
                c/c 20339 intestato a ISI s.r.l<br>";
$negozio = "Avellino";
$dati_postali = "<b>C/C n. :</b> 1000708444<br>
                 <b>intestazione:</b> ISI SRL<br>";

$SqlString = "SELECT negozio FROM liste WHERE id =" . $id_ordine;
$post_sql = $data->query($SqlString);
if (mysql_num_rows($post_sql) > 0) {
    while ($post_obj = $data->estrai($post_sql)) {
        if ($post_obj->negozio == "A") {
            $negozio = "Avellino";
            $to = "avellino@orzellecagioielli.it"; 
            $dati_bancari = "<b>IBAN : </b> I T96 J 05034 15100 000000020339<br/>
                             <b>BIC-SWIFT(International transfer) : </b> NVRBIT2N470 <br/>
                             <b>BANCO POPOLARE</b> 
                             c/c 20339 intestato a ISI s.r.l<br>";
        } else if ($post_obj->negozio == "B") {
            $negozio = "Benevento";
            $to = "benevento@orzellecagioielli.it";  
            $dati_bancari = "<b>IBAN : </b> IT69 U 08997 75280 006000122668<br/>
                             <b>BIC-SWIFT(International transfer) : </b> CCRTIT2TL00 <br/>
                             <b>BCC DI SAN MARCO DEI CAVOTI E DEL SANNIO CALVI SOCIET&Agrave;</b> 
                             c/c 006000122668 intestato a ISI s.r.l<br>";
        }
    }
}

$subject2 = "Richiesta Informazioni - Lista di Nozze " . $nome_completo;
$email2 = "INFORMAZIONI SULLA LISTA NOZZE di  <b>" . $nome_completo . "</b><br/><br/>

La ringraziamo per averci contattato,
i seguenti articoli sono disponibili per l'acquisto:
<br/><br/>" . $lista . "<br><br>" .
        "   Per acquistare <b> online <a href='http://www.orzellecagioielli.it/ordina.php?id=" . $id_ordine . "&tipo=O'>clicca qui</a></b><br>
(Oppure vai al seguente URL http://www.orzellecagioielli.it/ordina.php?id=" . $id_ordine . "&tipo=O)
 
<br/><br/> Per acquistare con <b>bollettino postale :</b><br> " . $dati_postali . "
<br/><br/>Per acquistare con <b>bonifico bancario : </b><br> " . $dati_bancari .  "
<br/><br/>Per allegare un bigliettino di Auguri per gli sposi invia un messaggio a questo indirizzo: <a href='mailto:" . $to . "'>" . $to . "</a>";

mail($email, $subject2, $email2, $mittente);
// Configuro i dati di invio della mail
// (destinatario, mittente, oggetto e corpo)
$mail_to      = $email;
$mail_from    = $to;
$mail_subject = $subject2;
$mail_body    = $email2;

// Specifico le intestazioni per il formato HTML 
$mail_in_html  = "MIME-Version: 1.0\r\n";
$mail_in_html .= "Content-type: text/html; charset=iso-8859-1\r\n";
$mail_in_html .= "From: <$mail_from>";

// Invio la mail
mail($mail_to, $mail_subject, $mail_body, $mail_in_html);

$flag = "<div id='email_inviata'>Email Inviata con Successo!<br/><br/><label>Controlla la tua casella postale per Scegliere il metodo di Pagamento</label></div>    <div class='home5' onclick='torna_home()'>";
$data->disconnetti();
echo $flag;
?>