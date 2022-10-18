<?php
    include('db_connection.php');

    $site = $_POST['id'];
    $user = $_POST['user'];
    $review = $_POST['review'];
    $date = $_POST['date'];
   
    $query = "INSERT INTO review(site_id, content_author, content_content, content_date) VALUES($site,$user,$review,$date)";
    mysqli_query($connection, $query);

    $dataset = (object) "data";
        $dataset->site=$site;
        $dataset->user=$user;
        $dataset->review=$review;
        $dataset->date=$date;
        $dataset->queryS=$query;
    
    $obj = json_encode($dataset);
    echo $obj;

?>