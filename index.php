<?php
// PHP Switch Statement
$status ='paid';

switch($status){
    case 'paid':
        echo "Payment Done",'<br/>';
        break;                       // break 2    => it shows that we come out upto two levelof loop
    case 'pending':
        echo "Pending",'<br/>';
        break;
    default:
        echo "Not decided",',br/>';
}

for($k=0;$k<3;$k++){

    for($i=0;$i<3;$i++){
        for($j=0;$j<5;$j++){
            echo $i,'<br/>';
            break 3;
        }
    }
}







?>