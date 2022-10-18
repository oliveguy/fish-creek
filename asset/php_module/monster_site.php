<?php
include("db_connection.php");

    $id = $_GET['id'];

    // MONSTER INFO PULLING
    $query = "SELECT * FROM monster_site WHERE id=$id"; 
    $sql = mysqli_query($connection,$query);
    $row = mysqli_fetch_array($sql);

    $obj=(object) 'modal';
        $obj->siteID=$row['id'];
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
        
        $obj->pic1=$row['img1'];
        $obj->pic2=$row['img2'];

        // REVIEW POST INFO PULLING
        $reviewPost1=new stdClass();

        $query = "SELECT * FROM review WHERE site_id=$id";
        $sql = mysqli_query($connection,$query);
        while($review=mysqli_fetch_array($sql)){
            $num = "id_".$review['id'];
            $reviewPost1->$num=(object)['author'=>$review['content_author'],'content'=>$review['content_content'],'date'=>$review['content_date']];
            // $reviewPost->$num=(object)['author'=>$review['content_author'],'content'=>$review['content_content'],'date'=>$review['content_date']];
            $obj->reviewPost=$reviewPost1;
        }

        $objJSON=json_encode($obj);
        echo $objJSON;
    ?>