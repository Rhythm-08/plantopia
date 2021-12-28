<?php
require('../includes/newsdb.php');
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
            <a href="indexi.php">
                <span><img src="img/blog.jpg" width="94px" alt=""></span>
            </a>
            <ul>
            <li><a href="../index.html">Home</a></li>
                <li><a href="../news.php">News</a></li>
                <li><a href="contact.html">Contact Us</a></li>
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
    <div class="max-width-1 m-auto">
        <hr>
    </div>
    <div class="m-auto content max-width-1 my-2">
        <div class="content-left">
            <h1>The heaven for bloggers</h1>
            <p>This is a website which lets you submit an article which upon approval will be up on our website and you
                can get a good amount of reach from here!</p>
            <p>Plant diversity underpins the functioning of all ecosystems, which in turn provide the fundamental support systems upon which all life depends. Services provided by ecosystems include carbon sequestration, climate regulation, nutrient cycling and pollination. Plants provide us with many direct benefits such as food, medicine, clothes, shelter and the raw materials from which countless other products are made.</p>
        </div>
        
    </div>

    <div class="max-width-1 m-auto">
        <hr>
    </div>
    <div class="home-articles max-width-1 m-auto font2">
        <h2>Featured Articles</h2>
        <div class="year-box adjust-year">
            <!-- <div>
                <h3>Year </h3>
            </div>
            <div>
                <input type="radio" name="year" id=""> 2020
            </div>
            <div>
                <input type="radio" name="year" id=""> 2021
            </div> -->
        </div>

<?php 

$sql = "SELECT * FROM `blog` ORDER BY id DESC";
$result = mysqli_query($db, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "<div class='home-article'>
    <div class='home-article-img'>
        <img src='../images/".$row['img']."' alt='article'>
    </div>
    <div class='home-article-content font1'>
        <a href='blogpost.php?postid=".$row['id']."'>
            <h3>".$row['title']."</h3>
        </a>

        <div>".$row['author']."</div>
        <span>".$row['date']."</span>
    </div>
</div>";
  }
} else {
  echo "0 results";
}


?>

        

    </div>

    <div class="footer">
        <!-- <p>Copyright &copy; PlantBlog.com </p> -->
        <a href="../index.html">Rhythm Sharma</a>
    </div>
</body>

</html>