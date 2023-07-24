<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?= 'Hello world'?>
    <?php
    # single line comment
    //single line comment
    /*

     Multiline comment



    */
    ?>
</body>
</html>
<?php
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

?>