<?php
include("db_connection.php");

    $id = $_GET['id'];
    // $id_r = $_GET['id_review'];

    $query = "SELECT * FROM monster_site WHERE id=$id";
    $sql = mysqli_query($connection,$query);
    $row = mysqli_fetch_array($sql);

    $obj=(object) 'modal';
        $obj->monName=$row['monster_name'];
        $obj->monDesc=$row['monster_desc'];
        $obj->monImg=$row['monster_img'];
        $obj->monLv=$row['monster_lv'];
        $obj->siteName=$row['site_name'];
        $obj->siteDesc=$row['site_desc'];
        $obj->season=$row['site_season'];
        $obj->siteTime=$row['site_time'];
        $obj->siteIMG=$row['site_img'];
        $obj->activity=$row['site_activity'];
        $obj->facilities=$row['site_facilities'];
        
        $obj->parking1=$row['site_parking_1'];
        $obj->parking2=$row['site_parking_2'];
        $obj->parking3=$row['site_parking_3'];

        // review
            // $query = "SELECT * FROM review WHERE site_id=$id_r";
            // $sql = mysqli_query($connection,$query);
            // $reviews = [];
            // while($row = mysqli_fetch_array($sql)){
            //     $each_review = [$row['content_author'],$row['content_content'],$row['content_date']];
            //     array_push($reviews, $each_review);
            // }
            // $obj->review=$reviews;

        $objJSON=json_encode($obj);
        echo $objJSON;
    ?>