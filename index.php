<?php
require_once 'Transaction.php';
$transaction = new Transaction(100,'Transaction');
// $transaction->amount = 15;
$transaction->addTax(8);
$transaction->applyDiscount(10);

var_dump($transaction->amount);

unset($transaction);      // same as  $transaction = null;   
                          // if we exit the also destruct is called


$obj = new \stdClass;
$obj->a = 1;
$obj->b = 5;

var_dump($obj);

?>