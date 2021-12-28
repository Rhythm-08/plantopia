<?php
require('../includes/newsdb.php');

echo "<style>

.newblog{
    width:50%;margin:auto;
}

.newblog h1
{
    font-family:arial;
}

.newblog input[type='text']
{   
    width:100%;
    height:50px;
    padding:8px;
}



.newblog textarea{
    width:100%;
    height:300px;
    padding:8px;
}


.newblog input[type='submit']
{
    width:20%;
    height:50px;
    text-align:center;
    border:none;
    background-color:green;
    color:white;
    border-radius :8px;
    cursor:pointer;
}

</style>";



echo "<br><br><div class='newblog'>
<h1>Blog Post </h1>
<form method='POST' action='' enctype='multipart/form-data'>
<input type='text' name='heading' placeholder='Enter heading...' required><br><br>
<textarea name='paragraph' row='5' col='10' placeholder='Enter Article...'>
</textarea>
<br><br>
<input type='text' name='author' placeholder='Enter Author...'>
<br><br>
<input type='file' name='image'>

<br><br>

<input type='submit' name='submit' value='POST'>
</div></form>";

if(isset($_POST['submit']))
{
    $heading = $_POST['heading'];
    $paragraph = $_POST['paragraph'];
    $author = $_POST['author'];

    if(!empty($heading) && !empty($paragraph) && !empty($author))
    {
        $img_name = $_FILES['image']['name'];
        $tmp_name = $_FILES['image']['tmp_name'];

        if(move_uploaded_file($tmp_name,"../images/".$img_name))
        {
            $sql = "INSERT INTO `blog`(`title`, `author`, `img`, `para`) VALUES ('{$heading}','{$author}','{$img_name}','{$paragraph}')";
                if (mysqli_query($db, $sql)) {
                    echo "Done Sir";
                } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($db);
                }

                mysqli_close($db);
        }
    }
}
?>