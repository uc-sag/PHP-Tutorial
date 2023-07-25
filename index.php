<?php
//Date and Time Zones


$currentTime = time();
echo $currentTime .'<br/>';
echo $currentTime + 5*24 *60*60 .'<br/>';
echo date('m/d/y g:ia') .'<br/>';
echo date('m/d/y g:ia', $currentTime + 5*24 *60*60) .'<br/>';

date_default_timezone_set('UTC');

?>