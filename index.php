<?php
//OPERATORS
#Error control Operators
$x = @file('foo.txt');

#Increment and Decrement Operator
$x = 5;
echo ++$x ,'<br/>';
echo --$x ,'<br/>';

$x = null;
echo --$x ,'<br/>';
echo ++$x ,'<br/>';

#Logical 
$x = 1;
$y = 0;
var_dump($x || $y);
var_dump($x or $y);
var_dump($x and $y);
var_dump($x && $y);

#Short Circuiting
function Hii(){
    echo "Hii";
    return true;
}

var_dump($x || Hii());


// Bitwise Operatorf 
$x = 6;
$y =3;
var_dump($x & $y);

// Array Operators
$x = ['a','b','c','d'];
$y = ['e','f','g','h','i','j'];
$z = $x +$y;
print_r($z);

$x = ['a'=>1,'b'=>2,'c'=>3,'d'=>4];
$y = ['e'=>1,'f'=>3,'g'=>3];
$z = $x +$y;
print_r($z);


?>