<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
   echo "<h1><i>Yahoo". "Baba</i></h1>";
   $names = "Harry <br>";
echo "<h1>".$names."</h1>";

// Data Types
$x = "Yahoo baba"; //------? Strings
echo $x."<br>";
var_dump($x);
$y = 25;  //---->integer
echo $y."<br>";
var_dump($y);
$z = true; // ----->boolean
echo $z;
var_dump($z);
$zx = 232.323; //--->float
echo $zx;
var_dump($zx);
$as = array("HTML","CSS","JS");  // ---->Array
echo $as[1]."<br>";
var_dump($as);

//Constant Variables
define("num", 400);
echo num."<br>";
echo (num + 23)."<br>";


//Aritmatic Operations
$a =12;
$b = 13.2;
$c = $a+$b;
echo $c;



class Bike { 
    public $color; 
    public $model;  
    public function __construct($color, $model) { 
    $this->color = $color; 
    $this->model = $model; 
    } 
    public function message() { 
    return "My bike is a " . $this->color . " " . $this->model . "!"; 
    } 
    } 
    
    $myBike = new Bike("red", "Honda"); 
    echo $myBike -> message();
   ?>
</body>
</html>