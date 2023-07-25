<?php
require_once 'Transaction.php';
// $transaction = new Transaction();

echo Transaction::STATUS_PAID;

$transaction = new Transaction();

// echo $transaction->count;     it cannot be acces because it is static 
var_dump(Transaction::$count);
?>