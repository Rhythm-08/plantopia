<?php
require('includes/newsdb.php');

?>
<main>
    <section class="main-container-left">
        <h2>Top Stories</h2>
        <div class="container-top-left">
            <article>

            <?php

                $sql = "SELECT * FROM `news` WHERE category = 'top_stories_big' LIMIT 1 ";
                $result = $db->query($sql);
                if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "
                    <img src='images/".$row['image']."' alt=''>
               <div>
                   <h3><a href='newspost.php?postid=".$row['id']."'>".$row['heading']."</a></h3>
                   <p>".substr($row['paragraph'],0,300)."....</p>
                   <a href='newspost.php?postid=".$row['id']."'>Read More
                           <span>>></span>
                       </a>
               </div>";
                }
                } else {
                echo "0 results";
                }
        ?>

            </article>
        </div>
        <div class="container-bottom-left">
            
            <?php

                $sql = "SELECT * FROM `news` WHERE category = 'top_stories_small' LIMIT 6";
                $result = $db->query($sql);
                if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<article>
                    <img src='images/".$row['image']."' alt=''>
                <div>
                <h3><a href='newspost.php?postid=".$row['id']."'>".$row['heading']."</a></h3>
                <p>".substr($row['paragraph'],0,200)."....</p>
                <a href='newspost.php?postid=".$row['id']."'>Read More
                        <span>>></span>
                    </a>
                </div> </article>";
                }
                } else {
                echo "0 results";
                }
                ?>
           
        
        </div>
    </section>
    <section  class="main-container-right">
        <h2 id='knowmore'>Latest Stories</h2>
        <article>
        <?php

        $sql = "SELECT * FROM `news` LIMIT 9";
        $result = $db->query($sql);
        if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "
            <h4>".$row['date']."
            </h4>
            <div>
               <h2><a href='newspost.php?postid=".$row['id']."'>".$row['heading']."
               </a></h2>
               <p class= 'card-text text-truncate'>".substr($row['paragraph'],0,250)."....</p>
               <a href='newspost.php?postid=".$row['id']."'>Read more <span>>></span>
                </a>
                </div>
                <img src='images/".$row['image']."'alt=''>";
        }
        } else {
        echo "0 results";
        }
        ?>
         </article>

       
    </section>
</main>