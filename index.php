<?php
// PHP NULL

// var_dump($x);

$x = 123;
var_dump($x);
unset($x);
var_dump($x);

$y = null;
var_dump((bool)$y);
var_dump((int)$y);
var_dump((string)$y);
var_dump((array)$y);

?>