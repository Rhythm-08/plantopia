<?php
require('includes/newsdb.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PLANTNEWS</title>
    <link rel="stylesheet" href="news.css">
    <!-- Google fonts -->
<link href="https://fonts.googleapis.com/css2?
family=Montserrat:wght@400;500;600;700&family=Raleway:wght@300;400;500;700;900&display=swap" 
rel="stylesheet">
  <!-- fontawesome -->
  <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>

</head>
<body>
    <!-- header -->
    <header>
    <div class="navigation-container">
         <div class="top-head">
             <div class="webname">
                 <h1>PLANTNEWS</h1>
             </div>
             <div class="ham-btn">
                 <span>
                     <i class ="fas fa-bars"></i>
                 </span>
             </div>
             <div class="times-btn">
                 <span>
                     <i class="fas fa-times"></i>
                 </span>
             </div>
         </div>
         <!-- nav -bar -->
         <?php include('includes/navbar.php'); ?>
         <div class="social-icons">
             <ul>
                 <li> <a href="#"><i class = "fab fa-facebook"></i> </a></li>
                 <li> <a href="#"><i class = "fab fa-twitter"></i> </a></li>
                 <li> <a href="#"><i class = "fab fa-instagram"></i> </a></li>
                 <li> <a href="#"><i class = "fab fa-youtube"></i> </a></li>
             </ul>
         </div>
    </div>
</header> 
<section class="banner">
    <div class="banner-main-content">
        <h2>GET THE WORLD'S LATEST PLANET NEWS</h2>
        <h3>World's Leading News Portal</h3>
        <button>
            <!-- <a href="#knowmore">Know More</a> -->
        </button>
        <div class="current-news-head">

        <?php

            $sql = "SELECT * FROM `news` WHERE category = 'hot_news_small' LIMIT 5";
            $result = $db->query($sql);
            
            if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
                  echo "
                <h3><a href='newspost.php?postid=".$row['id']."'>".$row['heading']."</a><span>News portal</span></h3>";
              }
            } else {
              echo "0 results";
            }
            $db->close();
        ?>
        </div>
    </div>
    <!--  Banner news -->
   <?php include_once('includes/banner.php'); ?>
</section>

<hr>

<!--  sidebar  -->
<?php include_once('includes/sidebar.php'); ?>
<!--  FOOTER  -->
<?php include_once('includes/footer.php'); ?>


    <script src="news.js" async defer></script>
</body>
</html>