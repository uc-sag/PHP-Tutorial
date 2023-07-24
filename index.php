<?php
//OPERATORS
#Arithmetic operators
$x = 10;
$y =2;

var_dump($x-$y);
echo '<br/>';
$z = '20';
var_dump($z);
var_dump(+$z);

$x = 10;
$y =0;
// var_dump($x/$y);  //it will give error
var_dump(fdiv($x,$y));

$x = 10.5;
$y = 3.5;

var_dump($x % $y);   //$x and $y will be casted into int


var_dump(fmod($x,$y));

#Assignment operator
$x = 5;

$x += 10;
echo $x;
echo '<br/>';

#String operators
$x = 'Hello';
$x .= ' World';
echo $x;
echo '<br/>';
#Comparison operators
$x = 5;
$y ='5';
var_dump($x == $y);
var_dump($x===$y);
var_dump($x != $y);
var_dump($x !==$y);

var_dump($x >$y);
var_dump($x < $y);
var_dump($x <= $y);
var_dump($x >= $y);
$z = 2;
var_dump($x <=> $z);

$str1 = 'abc';
$str2 = 'abc';

var_dump($str1 === $str2);

$y = strpos($str1,'b');
if($y == false){
    echo "Not found";
}
else{
    echo $y;
}

$z =  $y  == false ? 'yes':'No';
echo $z;



?>