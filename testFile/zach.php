<?
    $server="localhost";
    $user="zhowell_gallery_admin";
    $pwd="s3M6nP4JeUKe";
    $database="zhowell_fishcreek_gallery";
    $connection = mysqli_connect($server, $user, $pwd, $database);

    if(!$connection){
        die(mysql_connect_error());
    }
    $query = "SELECT * FROM site_photos";
    $sql = mysqli_query($connection,$query);
    while($row = mysqli_fetch_array($sql)){
        echo $row['site']."<br>";
        echo $row['cryptid']."<br>";
        echo $row['img']."<br>";
        echo '<hr>';
    }

?>