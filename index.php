<?php
// How to Create functions in PHP
foo();
bar();     // It will work only it it is called after foo() call
function foo(){
    echo 'foo','<br/>';
    function bar(){
        echo 'bar','<br/>';
    }
}
if(true){
    function xyx(){
        echo 'xyz','<br/>';
    }
}

xyz();    //it cna be called only after condition expression in run and it is true


function sum(int $x,int $y): int{
    return $x + $y;
}

var_dump(sum(2,5));



?>