<div class="banner-sub-content">


<?php
require('includes/newsdb.php');

        $sql = "SELECT * FROM `news` WHERE category = 'hot_news_big' LIMIT 4 ";
        $result = $db->query($sql);
        if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {         echo "
            <div class='hot-topic'>
            <img src='images/".$row['image']."' alt=''>
            <div class='hot-topic-content'>
            <h2>".$row['heading']."</h2> 
                <h3>Category</h3>
                <p>".substr($row['paragraph'],0,150)."....</p>
                <a href='newspost.php?postid=".$row['id']."'>Read More</a>
            </div>
        </div>";
        }
        } else {
        echo "0 results";
        }
?>

    </div>