<?php
declare(strict_types =1);
/**********************************************************
 * 
 * 
// Constants

// Here we can overwrite the value but in constants it is not allowed
$firstName = "sagar";
$firstName = "xyz";
echo $firstName;

// So Constants are deifined using two method Constants variable name does not require $ sign
// 1
define('STATUS','paid');

// define('STATUS','paid');    This will throw an error 

echo STATUS;
echo defined('STATUS') ;   // It will give boolean value 1 or 0


// 2   the constants defined using const keywords are defined at compile time while the constants defined using define() is created at runtime
const STATUS_PAID = 'paid';

echo STATUS_PAID ;
$IS = 'PAID';
define('FEE_'. $IS , 'Done');
echo FEE_PAID;
*
*
********************************************************************/
/*********************************************************** 
 * 
 * 
// Basic Syntax
echo 'Hello';     
print 'Hello sagar';    // it returns 1;
echo print 'Hello3 ';   // it prints Hello31
  echo 'ABC','DEF','GHI';   //it concatnates the values     echo is marginally faster

$x = 10;
$y = $x;
$x = 20;
echo "  ", $y;    //it will print 10 because it is assigned by value

$y = &$x;    // assigned by reference

$x = 40;
echo " ", $y;   // it will print 40;


*************************************************/
// Typecasting Overview

$completed = true;
$quantity = 4;
$price = 6.98;
$name = 'sagar';

echo $completed . '<br/>';
echo $quantity . '<br/>';
echo $price . '<br/>';
echo $name . '<br/>';

echo gettype($completed), '<br/>' ;
echo gettype($quantity) ,'<br/>';
echo gettype($price),'<br/>' ;
echo gettype($name) ,'<br/>';

var_dump($name);

#Compound Types
$companies = ['one','two','three',55,89];
print_r($companies);


// function sum($x,$y){
//     var_dump($x);
//     var_dump($y);
//     return $x +$y;
// }

// // echo sum(2,3);
// echo sum ('2',3);
// echo sum ('3.5',3);

function sum2(int $x, int $y){
    var_dump($x);
    var_dump($y);
    return $x +$y;
}
echo sum2('3',5);


// after enabling declare(strict_types =1);
echo sum2('2',4);  // it will give error



?>