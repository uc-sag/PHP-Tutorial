<?php
   echo $x.'<br/>';
   $x = 10;

   function fun(){
    global $x;
    $x = 200;
    
    echo $x.'<br/>';
    
   }
   fun();
   echo $x.'<br/>';
?>