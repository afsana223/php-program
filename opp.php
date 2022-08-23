<!-- 
    1.class
    2.propartes
    3.method
    4.object
    5.constructor
    6.accessor modefire;
 -->

<?php

class MyClass{
public $x,$y,$z; //access modefier-public,private,protected'; 

public function __construct($a,$b){
    $this->x =$a; $this->y =$b;
}


public function mysum(){
    $this->z = $this->x + $this->y;
    return $this->z;
}

}

// $asib = new MyClass();
// $asib->x =100;
// $asib->y =200;
// echo $asib->mysum();

$asib = new MyClass(300,300);
echo $asib->mysum();




?>