<?php
// Loops Break Continue

$x = 10;
while($x > 4){
    echo $x ,'<br/>';
    $x--;
}
echo 'do while loop','<br/>';
do{
    echo $x,'<br/>';
    $x++;
}while($x<6);

$arr = ['c++','java','C#'];

for($i = 0;$i<count($arr); $i++){
    echo $arr[$i],'<br/>';
}


foreach($arr as $val)
{
   echo $val,'<br/>';
}

$arr = ['a'=>1,'b'=>2,'c'=>3];
foreach($arr as $key => $val){
    echo $key,':',$val,'<br/>';
}





?>