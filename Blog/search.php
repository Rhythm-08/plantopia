<?php

require('../includes/newsdb.php');

$query = $_GET['query'];
$sql = "SELECT * FROM `blog` WHERE (`title` LIKE '%{$query}%' OR `author` LIKE '%{$query}%' OR `para` LIKE '%{$query}%')";
$result = mysqli_query($db, $sql);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/utils.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mobile.css">
    <title>Heaven for bloggers</title>
</head>
<body>
    <nav class="navigation max-width-1 m-auto">
        <div class="nav-left">
            <a href="/">
                <span><img src="img/logo.png" width="94px" alt=""></span>
            </a>
            <ul>
                <li><a href="indexi.php">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </div>
        <div class="nav-right">
        <form action="" method="POST">
                <input class="form-input" type="text" name="searchterm" placeholder="Article Search">
                <input type='submit' class="btn" name='search' value='Search'>
            </form>

            <?php
                if(isset($_POST['search']))
                {
                    $query = $_POST['searchterm'];
                    if(!empty($query))
                    {
                        echo "<script>window.location.replace('search.php?query=".$query."')</script>";
                    }
                }
            ?>
        </div>

    </nav>
 

    <div class="max-width-1 m-auto"><hr></div>
    <div class="home-articles max-width-1 m-auto font2">
        
        
<?php

if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result))
{
    echo "
    <div class='home-article'>
            <div class='home-article-img'>
                <img src='../images/".$row['img']."' alt='article'>
            </div>
            <div class='home-article-content font1'>
                <a href=''><h3>".$row['title']."</h3></a>
                
                <span>".$row['author']."</span>
                <span>".$row['date']."</span>
            </div>
        </div>";   
}}
else
{
    echo "Nothing Found !";
}

?>       
    </div>

    <div class="footer">
        <p>Copyright &copy; PlantBlog.com </p>
        <a href="#">Rhythm Sharma</a> 
    </div>
</body>
</html>