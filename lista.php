<div id="liste_regali" >
    <?php
    $lista = $_GET['lista'];
    ?>

    <div><strong>Liste <?php if ($lista == "R")
        echo "Regali";
    else if ($lista == "C")
        echo "Regali"; else
        echo "Matrimoni";
    ?></strong></div><br/><br/>
    <?php
    include 'lib/funzioni.php';

    $data = new MysqlClass();
    $data->connetti();
    $querySQL = "select * from liste where tipo ='" . $lista . "'";
    $post_sql = $data->query($querySQL);
    if (mysql_num_rows($post_sql) > 0) {
        while ($post_obj = $data->estrai($post_sql)) {
            ?>
            <div >
                <a onclick="<?php if(trim($post_obj->password)=="") echo "log('n',".trim($post_obj->id).")"; else echo "log('s',".trim($post_obj->id).")"; ?>"><?php echo $post_obj->lui . " " . $post_obj->lei . ", " . format_data($post_obj->data) . " (" . $post_obj->luogo . ")"; ?></a>
            </div>
        <?php
    }
}
?>
</div>
<div class="home5"    onclick="torna_home()">
</div>

