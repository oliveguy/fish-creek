<?php 
    $query2 = "SELECT * FROM review WHERE site_id=$id_review";
    $sql2 = mysqli_query($connection,$query2);

    while($row2 = mysqli_fetch_array($sql2)){
        $obj_review=(object) 'review';
        $obj_review->author=$row2['content_author'];
        $obj_review->content=$row2['content_content'];
        $obj_review->date=$row2['content_date'];

        $objJSON=json_encode($obj_review);

        echo $objJSON;
    }
?>