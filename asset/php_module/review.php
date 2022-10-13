<?php
include('db_connection.php');
    $id = $_GET['id'];
    $query = "SELECT * FROM review WHERE site_id=$id";
    $sql = mysqli_query($connection,$query);

    while($row2 = mysqli_fetch_array($sql)){
        $obj_review=(object) 'review';
        $obj_review->author=$row2['content_author'];
        $obj_review->content=$row2['content_content'];
        $obj_review->date=$row2['content_date'];

        $objJSON=json_encode($obj_review);

        echo $objJSON;
    }
?>