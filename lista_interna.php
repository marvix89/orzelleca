<?php
include "lib/funzioni.php";



$data = new MysqlClass();
$data->connetti();



$id_ordine = $_GET['id'];

$SqlString = "SELECT lui,lei FROM liste WHERE id = '" . $id_ordine . "'";
$post_sql = $data->query($SqlString);
if (mysql_num_rows($post_sql) > 0) {
    while ($post_obj = $data->estrai($post_sql)) {
        $nome_completo = $post_obj->lui . " " . $post_obj->lei;
    }
}

?>

<div style="width:650px;height: 500px;text-align: center;overflow-x: hidden;overflow-y: scroll; position: absolute;top: 50%;left: 50%;margin-left: -325px;margin-top: -250px;background: white;">

    <span id="titolo">Lista <?php echo $nome_completo ?></span><br /><br /><br />

    <?php
    
    $SqlString = "SELECT * FROM foto_liste WHERE proprietario = '" . $id_ordine . "' order by foto desc";
    $post_sql = $data->query($SqlString);
    if (mysql_num_rows($post_sql) > 0) {
        $i=1;
        while ($post_obj = $data->estrai($post_sql)) {
            ?>
            <div style="margin-left: 75px;overflow: hidden;width: 510px;height: 400px;">
                <img alt="" src="<?= $upload_path . $post_obj->foto ?>" width="500" />
            </div>
            <br/>
            <?php
            $i++;
        }
    }
    ?>
    <div style="text-align:justify;width: 600px;margin-left: 15px;"><strong>Seleziona gli articoli di tuo interesse. 
            Inserisci il tuo Cognome e Nome e l'indirizzo Email,
            poi premi Invia per prenotare.</strong></div><br/>
    <table style="margin-left: 15px;width:600px;border: 1px solid #F3F1F0;" id="table_prodotti">
        <tr>
            <th>
        <div>
            &nbsp;
        </div>
        </th>
        <th>
        <div>
            Codice
        </div>
        </th>
        <th> 
        <div>
            Articolo
        </div>
        </th>
        <th> 
        <div>
            Descrizione
        </div>
        </th>
        <th> 
        <div>
            Numero Pezzi
        </div>
        </th>
        <th> 
        <div>
            Stato
        </div>
        </th>
        <th> 
        <div>
            Prezzo
        </div>
        </th>
        </tr>
        <?php
        $SqlString = "SELECT * FROM prodotti_liste WHERE proprietario = '" . $id_ordine . "'";
        $post_sql = $data->query($SqlString);
        if (mysql_num_rows($post_sql) > 0) {
            $i = 0;
            while ($post_obj = $data->estrai($post_sql)) {
                $i++;
                ?>
                <tr>
                    <td>
                        <div>
                            <input type="checkbox"  name="<?= $i ?>" id="<?= $i ?>" />
                            <input type="hidden"  id="check<?= $i ?>" name="check<?= $i ?>" value="<?= $post_obj->id ?>" />
                            <input type="hidden"  id="prezzo<?= $i ?>" name="prezzo<?= $i ?>" value="<?= $post_obj->prezzo ?>" />

                        </div>
                    </td>
                    <td>
                        <div>
                            <?= $post_obj->codice ?>
                        </div>
                    </td>
                    <td>
                        <div>
                            <?= $post_obj->articolo ?>
                        </div>
                    </td>
                    <td>
                        <div>
                            <?= $post_obj->descrizione ?>
                        </div>
                    </td>
                    <td>
                        <div>
                            <?= $post_obj->pezzi ?>
                        </div>
                    </td>
                    <td>
                        <div>
                            <?php
                            if ($post_obj->stato == "0")
                                echo "Disponibilie";
                            else
                                echo "Esaurito";
                            ?>
                        </div>
                    </td>
                    <td>
                        <div>
                            <?= $post_obj->prezzo . " &euro;" ?>
                        </div>
                    </td>
                </tr>

                <?php
            }
        }
        ?>
    </table>
    <br/>
    <div>
        <label class="label_invia">Cognome Nome</label> <input type="text" id="nome1" name="nome" class="width25" /><br/>
        <label class="label_invia">  Email  </label><input type="text" id="email" name="email" class="width25"  />
    </div>
    <br>
    <input type="hidden" name="id" value="<?php print($id_ordine); ?>" />
    <input type="hidden" name="num_prodotti"  id="num_prodotti" value="<?= $i ?>" />
    <input type="submit" value="  Invia  " id="Button1"   onclick="return check_form(nome1.value,email.value,<?= $i ?>,<?= $id_ordine ?>,'<?= $nome_completo ?>')"/>
    <br />
    <br />
</div>
