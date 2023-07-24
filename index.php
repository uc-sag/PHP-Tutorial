<?php
// String Data Type Heredoc and Nowdoc
$firstName = 'sagar';
$lastName = "$firstName gupta";   // same as $lastName = "{$firstName} gupta";  


echo $firstName , '<br/>';
echo $lastName , '<br/>';

echo $lastName[2] , '<br/>';
echo $lastName[-2] , '<br/>';

$lastName[15] = 'x';
var_dump($lastName) ;
echo '<br/>';

$name = $firstName.' '.$lastName;
echo $name , '<br/>';   

#Heredoc
$text = <<<TEXT
    Line1 $name
 Line2 $firstName
 Line3  ' ' "
TEXT;

echo nl2br($text);    
echo  '<br/>';  
#Nowdoc
$text = <<<'TEXT'
 Line1 $name
 Line2 $firstName
 Line3  ' " ' ' ' "
TEXT;

echo nl2br($text);      
echo  '<br/>';  


?>