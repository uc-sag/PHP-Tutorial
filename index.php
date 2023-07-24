<?php
// Integers
$x = 10;
$y = 0x10;  //hexa decimal no.
$z = 010;  //Octal  no.
$a = 0b10;  //Binary  no.



echo $x;
echo '<br/>';
echo $y;
echo '<br/>';
echo $z;
echo '<br/>';
echo $a;

$temp = PHP_INT_MAX;
echo '<br/>';
echo $temp;
echo '<br/>';
var_dump($temp);
echo '<br/>';
var_dump($temp+1);

echo '<br/>';
echo is_int($temp);

echo '<br/>';
 $temp = 2000_000_00;
 var_dump($temp);

 echo '<br/>';
 echo $temp;

 echo '<br/>';
 $temp = '200_000_00';   //it will be casted as string
 var_dump($temp);


 echo '<br/>';
 $temp = (int)'200_000_00';   //it will 200 only
 var_dump($temp);



 
?>