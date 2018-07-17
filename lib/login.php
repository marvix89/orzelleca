<?php

session_start();
include "funzioni.php";


$pass = htmlentities($_GET['pass']);
$data = new MysqlClass();
$data->connetti();
$SqlString = "SELECT * FROM password WHERE password = '" . $pass . "'";
$post_sql = $data->query($SqlString);
if (mysql_num_rows($post_sql) > 0) {
    $post_obj = $data->estrai($post_sql);
    $flag = "S ".$post_obj->proprietario." ".$post_obj->nome;
} else {
    $flag = "N";
}
// chiusura della connessione a MySQL
$data->disconnetti();


echo $flag;
?> 