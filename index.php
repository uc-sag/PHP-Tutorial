<?php
//Variable anonymous and callable function
function sum(int|float ...$numbers): int|float{
    return array_sum($numbers);
}

echo sum(1,2,3,4).'<br/>';

$x = 'sum';
if(is_callable($x)){
    echo $x(1,2,3,4);
}
else{
    echo "Not callable";
}

//Anonymous function end with semicolon
$x =1;
$sum = function(int|float ...$numbers) use(&$x): int|float{
    $x = 15;
    echo $x;
    return array_sum($numbers);
};
echo $sum(2,3,4);
echo '<br/>',$x;

//callable functions

$array = [1,2,3,4];
function foo($element){
   return $element *2;
}
$array2 = array_map('foo',$array);
echo '<pre>';
print_r($array);

print_r($array2);
echo '</pre>';


$sum = function(callable $callback, int|float ...$numbers): int|float{
    return $callback(array_sum($numbers));
};
echo $sum(function($element){
   return $element *2;
},1,2,3,4);


//Arrow functions
$array = [1,2,3,4];
$x = 2;
$array2 = array_map(fn($numb)=> $numb * $numb * $x ,$array);    // we can access the parent scope variable in arrow function without the use keyword     
echo '<pre>';
print_r($array);                                               //if we modify the varible of parent scope it is not modified for parent

print_r($array2);
echo '</pre>';



?>