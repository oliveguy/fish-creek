<?php
    $server = "localhost";
    $user = "spark_fish_creek";
    $pwd = "fishcreek1234";
    $database = "spark_fish_creek";
    $connection = mysqli_connect($server, $user, $pwd, $database);

    if(!$connection){
        die(mysql_connect_error());
    } 
?>