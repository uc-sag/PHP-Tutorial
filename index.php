<?php
// PHP function parameters
declare(strict_types=1);
function foo(int|float $x ,int|float $y)
{
    return $x + $y;
}

echo foo(5.0,10),'<br/>';

function sum(...$numbers):int|float
{
    $tot = 0;
    foreach($numbers as $val)
    {
        $tot += $val;
    }
    return $tot;
}

echo sum(2,4,5,7.5),'<br/>';


function bar(int $x,int $y){
    var_dump($x);
    if($x % $y ==0){
        return "Yes";
    }
    else{
        return "No";
    }
}

$x = 5;
$y =3;
echo bar(y:$y,x:$x);  // Named Parameter


?>