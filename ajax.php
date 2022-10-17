<?php
    $server = "localhost";
    $user = "spark_fish_creek";
    $pwd = "fishcreek1234";
    $database = "spark_fish_creek";
    $connection = mysqli_connect($server, $user, $pwd, $database);

    if(!$connection){
        die(mysql_connect_error());
    }

    // $id = $_GET['id'];

    $query = "SELECT * FROM review WHERE site_id=1";
    $sql = mysqli_query($connection,$query);
    // $row = mysqli_fetch_array($sql);

    $object = new stdClass();

    while($review=mysqli_fetch_array($sql)){
        $num = "id_".$review['id'];
        $object->$num= (object)['author'=>$review['content_author'],
        'content'=>$review['content_content'],
        'date'=>$review['content_date']]
        ;}
    
        $objJSON=json_encode($object);
        echo $objJSON;

?>