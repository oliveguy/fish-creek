<?php
    include('asset/php_module/db_connection.php');
    
    $id = $_GET['id'];

    $query = "SELECT * FROM monster_site WHERE id=$id";
    $sql = mysqli_query($connection,$query);
    $row = mysqli_fetch_array($sql);


$obj = (object) 'fishCreek';
    $obj->monName = $row['monster_name'];
    $obj->monLv = $row['monster_lv'];
    $obj->siteAct = $row['site_activity'];

    $objJSON = json_encode($obj);
    
    echo $objJSON;
    ?>