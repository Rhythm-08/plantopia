<?php
require('includes/newsdb.php');

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

.newblog select
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
echo "
<div class='newblog'>
<h1>New Post</h1>
<form method='POST' action='' enctype='multipart/form-data'>
<input type='text' name='heading' placeholder='Enter heading...' required><br><br>
<textarea name='paragraph' row='5' col='10'>
</textarea>
<br><br>
<select name='category' required>
<option>Select</option>
<option value='hot_news_small'>Hot News Small</option>
<option value='hot_news_big'>Hot News Big</option>
<option value='top_stories_big'>Top Stories - Big</option>
<option value='top_stories_small'>Top Stories - Small</option>
</select>
<br><br>
<input type='file' name='image'>

<br><br>

<input type='submit' name='submit' value='POST'>
</form></div>";

if(isset($_POST['submit']))
{
    $heading = $_POST['heading'];
    $paragraph = $_POST['paragraph'];
    $category = $_POST['category'];

    if(!empty($heading) && !empty($paragraph) && !empty($category))
    {
        $img_name = $_FILES['image']['name'];
        $tmp_name = $_FILES['image']['tmp_name'];

        if(move_uploaded_file($tmp_name,"images/".$img_name))
        {
            $sql = "INSERT INTO `news`(`heading`, `paragraph`, `image`,`category`) VALUES ('{$heading}','{$paragraph}','{$img_name}','{$category}')";
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