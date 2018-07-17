

<!--<section id="jms-slideshow" class="jms-slideshow">
    <?php
    /*include 'lib/funzioni.php';
    $data = new MysqlClass();
    $data->connetti();
    $querySQL = "select * from slide order by id limit 6 ";
    $post_sql = $data->query($querySQL);
    if (mysql_num_rows($post_sql) > 0) {
        $i = 1;
        while ($post_obj = $data->estrai($post_sql)) {
            ?>
            <div class="step" data-color="color-<?= $i ?>" <?php
        switch ($i) {
            case 1: echo 'data-y="900"';
            case 2: echo 'data-x="-100"';
            case 3: echo 'data-x="3000"';
            case 4: echo 'data-y="900"';
            case 5: echo 'data-x="-100"';
            case 6: echo 'data-x="3000"';
        }
            ?>>
                <img src="img/slide/<?= $post_obj->foto ?>" />
            </div>


            <?php
            $i++;
        }
    }*/
    ?>
</section>-->
<section id="jms-slideshow" class="jms-slideshow">
    <div class="step" data-color="color-7" >
        <img src="img/slide/slide-damiani.png" />
    </div>
    <div class="step" data-color="color-1" >
        <img src="img/slide/1.png" />
    </div>
    <div class="step" data-color="color-2" >
        <img src="img/slide/2.png" />
    </div>
    <div class="step" data-color="color-3" >
        <img src="img/slide/3.png" />
    </div>
    <div class="step" data-color="color-4" >
        <img src="img/slide/4.png" />
    </div>
    <div class="step" data-color="color-5" >
        <img src="img/slide/5.png" />
    </div>
    <div class="step" data-color="color-6" >
        <img src="img/slide/6.png" />
    </div>
</section>