<?php
// How to include files in php
require 'file.php';          //include will return warning if file is not found but require return error and stop excution of script

require_once 'file.php';      //it include only one time


$x = include 'file2.php';
var_dump($x);
?>