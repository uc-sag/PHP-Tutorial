

<?php
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

?>