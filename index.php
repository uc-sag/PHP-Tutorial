<?php
// How To Work With Arrays In PHP
require 'helpers.php';

$items = ['a'=>1,'b'=>2,'c'=>3,'d'=>4];
myArrayPrint($items);
myArrayPrint(array_chunk($items,2,true));

$arr1 = ['a','b','c'];
$arr2 = [1,2,3];
myArrayPrint(array_combine($arr1,$arr2));

myArrayPrint(array_filter($arr2,fn($ele)=>$ele %2==0));

$inoviceItems = [
    ['price'=>9.99,'qty'=>3,'desc'=>'Item 1'],
    ['price'=>345,'qty'=>2,'desc'=>'Item 2'],
    ['price'=>23,'qty'=>0,'desc'=>'Item 3'],
];

$total = array_reduce(
    $inoviceItems,
    fn($sum,$item) => $sum += $item['qty'] * $item['price'],100
);

echo $total;


$arr = ['a','b','c','d','E'];
$key = array_search('d',$arr);
if($key === false){                              
    echo 'Letter not found';
}
else{
    echo 'Found at' . $key;
}

echo '<br/>';

$array = ['a'=>3,'b'=>2,'c'=>0,'d'=>-1,'e'=>5];

myArrayPrint($array);
asort($array);
myArrayPrint($array);
ksort($array);
myArrayPrint($array);

usort($array,fn($a,$b)=> $b>$a);
myArrayPrint($array);


$array = [1,2,3,4];
list($a,$b,$c,$d) = $array;                                        //destructuring array

echo $a,' ',$b,' ',$c,' ',$d,' <br/>';
[$a,$b,$c,$d ]= $array;                                             //destructuring array

echo $a,' ',$b,' ',$c,' ',$d,' <br/>';

?>