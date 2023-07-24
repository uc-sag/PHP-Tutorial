<?php
// Float Data Type
$x = 13.5e3;
echo $x ,'<br/>';

$x = 13.5e-3;
echo $x ,'<br/>';

$y = 13_000.05;
echo $y ,'<br/>';


echo PHP_FLOAT_MAX,'<br/>';

$x = floor((0.1+0.3)*10);
echo $x ,'<br/>';

$x = ceil((0.1+0.2)*10);
echo $x ,'<br/>';


$x = 0.23;
$y = 1-0.77;
var_dump($x,$y);
if($x == $y){
    echo "Yes";

}
else{
    echo " No";
}
echo '<br/>';
echo PHP_FLOAT_MAX *2 ,'<br/>';

?>