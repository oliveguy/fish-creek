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

    $query = "SELECT * FROM monster_site WHERE id=1";
    $sql = mysqli_query($connection,$query);
    $row = mysqli_fetch_array($sql);

    $query2= "SELECT * FROM review WHERE site_id=1";
    $sql2 = mysqli_query($connection,$query2);
    $row2 = mysqli_fetch_array($sql2);

?>
<html>
    <body>
<div class="z-monstermodal">
    <a href="#" class="z-close">
        <span></span>
        <img src="asset/images/x_button.svg" alt="close button" width="20" height="20" class="closeBtnImg">
    </a>
    <h2 class="siteName"><?= $row['site_name']; ?></h2>
        <img src="asset/images/monster/<?php echo $row['monster_img'];?>" alt="Cryptid's picture goes here." class="z-img">
    <div class="containerScroll">
        <h3 class="z-monstername"><?php echo $row['monster_name']; ?></h3>
            <p class="z-monsterdesc"><?php echo $row['monster_desc']; ?></p>
            <div  class="z-img"><img class="z-img" src="location.jpg" alt="Location photograph goes here."></div>
        <h3 class="z-locationname"><?php echo $row['site_name']; ?></h3>
            <p class="z-locationdesc"><?php echo $row['site_desc']; ?></p>
        <h3 class="z-activities-h">Activities</h3>
            <div class="z-activities">
                <figure class="z-icon">
                    <img src="icon.png">
                    <figcaption><?php echo $row['site_activity']; ?></figcaption>
                </figure>
                <figure class="z-icon">
                    <img src="icon.png">
                    <figcaption><?php echo $row['site_activity']; ?></figcaption>
                </figure>
                <figure class="z-icon">
                    <img src="icon.png">
                    <figcaption><?php echo $row['site_activity']; ?></figcaption>
                </figure>
            </div>
        <h3 class="z-parkinglots">Parking Lots</h3>
            <button class="z-lotbutton">Parking Lot</button>
            <button class="z-lotbutton">Parking Lot</button>
        <h3 class="z-reviews">User Reviews</h3>
        <?php
            $sql2 = mysqli_query($connection,$query2); 
            WHILE($row=mysqli_fetch_array($sql)){
                echo  "<ul class=\"z-reviewlist\">";
                echo "<li class=\"z-reviewer\"></li>";
                    //<img class="z-user" src="user.jpg">
                echo "<li class=\"z-user\">" .$row2['content_author']. " </li>";
                echo "<li class=\"z-date\">" .$row2['content_date']. "</li>";
                echo "<li class=\"z-review\">" .$row2['content_content']. "</li>";
                echo "</ul>";
                echo "<form method=\"post\" action=\"#\">";
                echo "<label for=\"z-testimonial\"></label>";
                echo "<textarea name=\"z-testimonial\" class=\"z-testimonial\" rows=\"10\"></textarea>";
                echo "<input class=\"z-submit\" type=\"submit\" value=\"SUBMIT\">";
                echo "</form>";
            }
        ?>
            
    </div>
</div>
</body>
</html>