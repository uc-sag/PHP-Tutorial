<?php
//PHP variables scopes - Static Variables
$x = 5;
include 'script1.php';

echo $x.'<br/>';
function foo(){
    // sleep(2);
 echo "foo-",$GLOBALS['x'],'<br/>';  
}
foo();

function bar(){
    static $val = 0;
    echo "bar called ".++$val."times".'<br/>';
}

bar();
bar();

?>