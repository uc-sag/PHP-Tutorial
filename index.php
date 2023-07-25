<?php
// How To Work With PHPs Configuration File - PHP.INI


//error_reporting, error_log ,display_errors

var_dump(ini_get('error_reporting'));
var_dump(ini_get('memory_limit'));
ini_set('display_errors',0);
ini_set('max_execution_time',35);        //default 30 sec
var_dump(E_ALL); 

?>