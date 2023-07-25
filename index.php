<?php
// PHP Match Expression
$status = 9;

$res = match($status){           // the match expression does strict check while switch does not
    1 =>'paid',
    2,3 =>'Not paid',
    0 =>'Pending',
    default=>'Not confirm'
};

echo $res,'<br/>';





?>