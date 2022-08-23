<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php file</title>
</head>
<body>
   
<!-- fform -->
<form action="practice.php" method ="post">

name:<input type="text" name="name"><br>
email:<input type="text" name="email"><br>
<input type="submit">

</form>

<!-- file upload -->



<form action="practice.php" method="POST" enctype="multipart/form-data">
    select image

<input type="file" name="filename"><br><br>
<input type="submit" value="Upload" name="submit">


</form>






welcome <?php echo $_POST['name']; ?><br>

yourr email is: <?php echo $_POST['email']; ?><br> 

<h3>form2</h3>

<form action="practice.php" method="post"> 

Name: <input type="text" name="name" ><br>
Email: <input type="text" name="email"><br>
<input type="submit"><br>



</form>


Welcome <?php echo $_POST["name"]; ?><br>
Your email is : <?php echo $_POST["email"];?><br>

<!-- form validation -->

<h3>php form validation </h3>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

<table>
    <tr>
        <td>Name :</td>
        <td><input type="text" name="fname" required></td>
    </tr>

    <tr>
        <td>E-mail :</td>
        <td><input type="text" name="femail"></td>
    </tr>

    <tr>
        <td>Website :</td>
        <td><input type="text" name="website"></td>
    </tr>


    <tr>
        <td>Comment :</td>
        <td><textarea name="comment" id="" cols="30" rows="5"></textarea></td>
    </tr>

    <tr>
        <td>Gender :</td>
        <td>
            <input type="radio" name="gender" value="Female">Female
            <input type="radio" name="gender" value="Male">Male
            <input type="radio" name="gender" value="Other">Other
    </td>
    </tr>

<tr>
    <td></td>
    <td><input type="submit"></td>
</tr>


</table>

</form>
<!-- php validation -->
<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name =validate( $_POST["fname"]);
    $email =validate( $_POST["femail"]);
    $website =validate( $_POST["website"]);
    $comment =validate( $_POST["comment"]);
    $gender =validate( $_POST["gender"]);
}

function validate($data){
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

echo $name;
echo '<br>';

echo $email;
echo '<br>';

echo $website;
echo '<br>';

echo $comment;
echo '<br>';

echo $gender;
echo '<br>';









?>





















<!-- my frist php program -->
   <h3>php practice</h3>
<?php

//form

// echo 'welcome  '. $_POST['name'];
// echo '<br>';
// echo 'this is your email  ' . $_POST['email'];

// echo '<br>';





$text = 'my name is pakhi.';
echo $text,' i am a student also. <br>';

// single line comment

# this also single line comment

/* this is maltipule line comment
ok */

$x = 5 + 5;
echo $x ,'<br>';

$text1 = 'w3schools.com';
echo 'i love ',$text1 ,'<br>';

$num1 = 4;
$num2 = 8;
$total = $num1 + $num2;
echo $total ,'<br>';

//scope

$num3 = 5; 

function mytest(){
    echo 'my function is:' ,$num3, '<br>';//this called block scope
}

mytest();
echo 'my function is:' ,$num3, '<br>';//and this global scope.

//global

$m = 10;
$n = 5;
function num(){
    global $m,$n;
    $n = $n + $m;
}
num();
echo $n,'<br>';

//static

function all(){
    static $x = 2;
    echo $x ,'<br>';
    $x++;
}
all();
all();
all();
all();


$mynum = 5677;
var_dump($mynum);

echo '<br>';

$mynum1 = 5669.23;
var_dump($mynum);
echo '<br>';
//boolean


$x = true;
$y = false;

echo $x;
echo '<br>';
//detailes in next chappter


//array

$car = array('bmw','volvo','toyota');

var_dump($car);

echo '<br>';


//object 

class Car {
    public $color;public $model;
    public function carModel($color,$model){
       global $color;global $model;
       $color = $color;
       $model = $model;
       echo 'this is car color' . $color . $model . '<br>'; 

    }
}

$bmw = new Car;
 $bmw-> carModel('red','300');//letter


//php string

//length of string
echo strlen('hellow world');
echo '<br>';

echo str_word_count('i am reme');
echo '<br>';

// string revese
echo strrev("you are lucky man");
echo '<br>';

echo strpos('i am reme','reme');
echo '<br>';


//replase

echo str_replace('hellow world','world','mina');

echo '<br>';

// php number

$E = 3456;
var_dump(is_int($E));
echo '<br>';
$e = 44.66;
var_dump(is_int($e));

echo '<br>';
var_dump(is_float($e));


echo '<br>';

$in =  4456.76;
$int_cast = (int)$in;

echo $int_cast;
echo '<br>';
//php math

echo pi();

//min max
echo '<br>';
echo (min(3,4,56,7,89,0));
echo '<br>';
echo (max(86,9,0,45,3));

echo '<br>';
//abs()

echo abs(-77);
echo '<br>';

echo sqrt(64);
echo '<br>';

echo (round(44.4));
echo '<br>';
echo  (round(51.51));
echo '<br>';
//random
echo (rand(10,100));
echo '<br>';

//php constant

define('gt','i love w3school');
echo gt;
echo '<br>';
// php oparators
  echo 3 ** 2;
  echo '<br>';

  //if else

  $d = date('H');
  if($d < 12){
      echo 'good day';
  }
  
  elseif($d <15){
      echo 'it is time';
  }
  
  else{
      echo 'good time';
  }


  echo '<br>';

//switch

$favour = 'green';

switch($favour){
    case 'red':
        echo 'color is red';
        break;
        case 'green':
        echo 'color is green';
        break;
        case 'pink':
            echo ' color is pink';
            break;
            default:
            echo 'no color';

}

//loop

$i = 0;
while($i<=5){
    echo $i,'<br>';
    $i++;
}

//do while
$r =10;
do{
    echo $r,'<br>';
    $r++;
    if($r == 16){
        break;
    }
}
    while($r<21);


//for loop

for($q = 2;$q<6;$q++){
    echo $q ,'<br>';
}

//foreach

$colors = array('red','green','pink');
 
foreach($colors as $value){
    echo $value . '<br>';
}

//array -2

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $val) {
  echo " $x = $val . <br>";
}

//php function

function rightMgs(){
    echo 'please take it';
}

rightMgs();
echo '<br>';
rightMgs();
echo '<br>';
function names($name){
    echo "$name roy <br>";
}



names('jony');
names('riya');

echo '<br>';
echo "today is" . date("d/m/Y").'<br>';
date_default_timezone_set("Asia/Bangladesh");//????in valid in xampp
echo 'time is'. date("h:i:sa"). '<br>';


// function addnum(int $a,int $b){
//     return $a + $b;
// }

// echo addnum(5,'5 day');


function addnum1(int $a,int $b){
    return $a + $b;

}
echo addnum1(4,4);
echo '<br>';
function height(int $minheight = 50){
    echo "the height is $minheight <br>";
}
height(45);
echo '<br>';
height();
echo '<br>';

//next

function sum(int $x,int $y){
    $z= $x + $y;
    return $z;
}

echo sum(110,6);
echo '<br>';


function fl(float $x,float $y):float{
return $x + $y;

}


echo fl(1.2,3.4);
echo '<br>';


function in(float $x,float $y): int {
    return (int)($x + $y);
}


echo in(5.7,7.8);

echo '<br>';

function num2(&$value){
    $value += 5;

}
$mynum =5;
num2($mynum);
echo $mynum;

echo '<br>';
$cars = array('volvo','bmww','madaza');

echo "i like $cars[0],$cars[1] and $cars[2]";

echo '<br>';

echo count($cars);
echo '<br>';


$arrlenght = count($cars);

for($x=0;$x< $arrlenght;$x++){

    echo $cars[$x];
    echo '<br>';
}


$arrname = array('ben'=>'45','jone'=>'56');

echo 'this is age of ben  '. $arrname['ben'];

foreach($arrname as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}

$cars = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
  );
      
  for ($row = 0; $row < 4; $row++) {
    echo "<p><b>Row number $row</b></p>";
    echo "<ul>";
    for ($col = 0; $col < 3; $col++) {
      echo "<li>".$cars[$row][$col]."</li>";
    }
    echo "</ul>";
  }

//sort


$carsName = array("volvo","bmw","toyota");
 sort($carsName);
$length = count($carsName);

 for($x =0;$x < $length;$x++){
     echo $carsName[$x];
     echo '<br>';
 }

//number sort

$number = array(2,1,3,9,8,7,6,5);

sort($number);
$arlength = count($number);

for($x =0; $x < $arlength;$x++){
    echo $number[$x];
    echo '<br>';
}

$age = array("Peter"=>"44", "Ben"=>"37", "Joe"=>"43");

asort($age);

foreach($age as $x => $x_value){
    echo "key =".$x.",value=".$x_value;
    echo "<br>";
}


?>


<h3>php advance</h3>
<?php

echo 'Today is '.date('d/m/Y');
echo '<br>';

echo 'today is ' . date('d.m.Y');
echo '<br>';
echo 'today is '. date('d-m-Y');
echo '<br>';
echo 'today is '. date('l');
echo '<br>';
echo date('H');
echo '<br>';

echo 'tooday is '. date('h:i:sa');
echo '<br>';

date_default_timezone_set("Asia/Dhaka");
echo date(' Y-m-d h:i:sa');
echo '<br>';

//creat time
$d =mktime(5,11,22,8,11,2022);
echo 'creat a date is '. date('Y-m-d  h:i:sa',$d);
echo '<br>';

$t =strtotime('10:50am april 15 2014');
echo 'creat a date  is  '.date('Y/m/d  h:i:sa',$t);
echo '<br>';


$q= strtotime('tomorrow');
echo date('Y/m/d  h:i:sa',$q);
echo '<br>';

$w= strtotime('next sunday');
echo 'next sunday '. date('Y/m/d   h:i:sa',$w).'<br>';

$e=strtotime('+3 month');
echo 'after 3 month '.date('y/m/d  h:i:sa',$e).'<br>';

//more example

$start=strtotime('saturday');
$end =strtotime('+6 weeks',$start);
while($start< $end){
    echo date('M d',$start);echo '<br>';
    $start = strtotime('+1 week',$start);
}










?>

<!-- copyright year  &copy; -->
<h3>atometic copyright year</h3>
<br>
&copy; 2010-<?php echo date('Y');?>
<br>
&copy; 2005-<?php echo date('Y');?>


<!-- include file -->

<?php  require 'new/index.html';        ?>
<?php  include 'new.php';        ?>

<!-- <?php // echo readfile('index.html'); ?> -->

<?php  

// $myfile = fopen('new/index.html','r') or die('this file unable to show');
// echo fread($myfile,filesize('new/index.html'));
// fclose($myfile);
   




?>
<p>new</p>

<?php  

$myfile1 = fopen('new.txt','r') or die('this file unable to show');
echo fgets($myfile1);
fclose($myfile1);
   
?>



<?php
$file = fopen('new.txt','w');
$text = "my name is afsana rokaya reme  \n";
fwrite($file,$text);
$text1 = "my name is pakhi \n";
fwrite($file,$text1);
fclose($file);
?>

<?php

$myfile = fopen('new.txt','a') or die('this file unable to open');
$text = "my name is rakhi \n";
fwrite($myfile,$text);
$text ="my name is soyeta \n";
fwrite($myfile,$text);
fclose($myfile);
echo '<br>';
?>
<p>for</p>
<?php
$mytextfile = fopen('new.txt','r') or die('this file cannot show');
echo fread($mytextfile,filesize('new.txt'));
fclose($mytextfile);
?>
<br><br>
<!-- file upload -->



<?php

if(isset($_POST['submit'])){

  $filename =  $_FILES['filename']['name'];
 $tmp_loc =   $_FILES['filename']['tmp_name'];
 $uploc = 'image/';
   
   if(!empty($filename)){

    move_uploaded_file($tmp_loc,$uploc.$filename);
   }else{
       'select a file';
   }
   

}



?>
























</body>
</html>

