<?php
    $server = "localhost";
    $user = "spark_fish_creek";
    $pwd = "fishcreek1234";
    $database = "spark_fish_creek";
    $connection = mysqli_connect($server, $user, $pwd, $database);

    if(!$connection){
        die(mysql_connect_error());
    } 

    $query = "SELECT * FROM monster_site";
    $sql = mysqli_query($connection,$query);
    $row = mysqli_fetch_array($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Test</h1>
    <?php
        echo $row[1];
    ?>
</body>
</html>