<?php
require('includes/newsdb.php');

$postid = $_GET['postid'];

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


<div>
<article>
            
            <div style='width:80%;margin-left:auto;margin-right:auto;'> 
            <br><br>
            <?php

                $sql = "SELECT * FROM `news` where id = '{$postid}'";
                $result = $db->query($sql);

                if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    
                    echo "
                   
                    <h1 style='font-size:42px;padding-bottom:5px;border-bottom:2px solid black;'>".$row['heading']."</h1>
                    <p style='padding-bottom:20px;padding-top:10px;'>Posted on ".$row['date']."</p>
                   <center> <img src='images/".$row['image']."' style='height:450px; width: 650px;border-radius:6px;' ></center>
                    <p style='text-align:justify;font-size:18px;padding-bottom:50px;padding-top:30px;' class= 'card-text text-truncate'>".$row['paragraph']."</p> 
                    ";
                }
                } else {
                echo "0 results";
                }
                $db->close();
            ?>
    </div>
               
               

        </article>
    

</div>




<!--  FOOTER  -->
<?php include_once('includes/footer.php'); ?>


    <script src="news.js" async defer></script>
</body>
</html>