<?php 
if(isset($_POST['submit'])){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "plant";
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$message=$_POST['message'];

$email_from="rhythmsharma808@gmail.com";
$_email_subject="Plantopia";
$email_body="you will receive a call from our executive ";

$email_to="smaridhsood32@gmail.com";
$headers="from:$email_from \n";
$headers ="reply-to:$email\n";
mail($email_to,$_email_subject,$email_body,$headers);
$conn =  mysqli_connect($servername,$username,$password,$dbname);

if($conn){
  

$sql="INSERT INTO `contactus`( `name`, `phone`, `email`, `message`) VALUES ('$name','$phone','$email','$message')";
$query=mysqli_query($conn,$sql);

}
else{
    echo "error";
}


}

