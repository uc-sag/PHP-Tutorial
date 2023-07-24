<?php
// Array Data Type
$progLang = ['C','C++','Java','Python'];   // $progLang = array('C','C++','Java','Python');

$name = 'sagar';
echo $name[2];
echo '<br/>';
echo $name[-2];   //in this it will give 2nd value from last but we cannot do it in array
echo '<br/>';
echo $progLang[2];
echo '<br/>';
// echo $progLang[-2];   // it will give error

$progLang[2]='Dart';
var_dump($progLang);
echo '<br/>';
echo '<pre>';
print_r($progLang);
echo '</pre>';
echo '<br/>';
echo count($progLang);

$progLang[] = 'JavaScript';
array_push($progLang,'.Net','C#');
echo '<pre>';
print_r($progLang);
echo '</pre>';
echo '<br/>';
echo count($progLang);

$detail = [
  'name'=>[
    'first'=>'sagar',
    'last'=>'gupta'
  ],
  'address'=>[
    'city'=>'bhadohi',
    'country'=>'india',
    'state'=>'UP'
  ],
  'mobileno'=>[
    'cell'=> 876543,
    'phone'=>1234567890
  ]
];

echo '<pre>';
var_dump($detail);

echo $detail['name']['last'];
echo '<br/>';


$data = [
    true=>'a',
    1=>'b',
    '1'=>'c',
  
];
echo $data[1];
echo '<br/>';
$arr = ['a'=>1,'b'=>null];
var_dump(array_key_exists('b',$arr));
var_dump(isset($arr['b']));

?>