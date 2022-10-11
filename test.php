<?php
    $server = "localhost";
    $user = "spark_fish_creek";
    $pwd = "fishcreek1234";
    $database = "spark_fish_creek";
    $connection = mysqli_connect($server, $user, $pwd, $database);

    if(!$connection){
        die(mysql_connect_error());
    } 
    $id = $_GET['id'];

    $query = "SELECT * FROM monster_site WHERE id=$id";
    $sql = mysqli_query($connection,$query);
    $row = mysqli_fetch_array($sql);

    echo '
    {"monsterName":'.'"'.$row['monster_name'].'"'.','.'"monsterLv":'.'"'.$row['monster_lv'].'"
    }
    ';
    ?>