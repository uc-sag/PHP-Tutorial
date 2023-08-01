<?php
//Classes and Objects
// declare(strict_types=1); 
// require_once 'Transaction.php';

// $transaction = new Transaction(100,'Transaction 1');
// $transaction->amount = 15;
// var_dump($transaction->amount);
// $transaction->addTax(8);
// $transaction->applyDiscount(10);

// $abc = new Abc();
// var_dump($transaction->amount);
// var_dump($transaction->getAmount());

// $abc = null;

// unset($transaction);    call the destructor

// $transaction= null;      call the destructor

// $str = '{"a":1,"b":2,"c":3}';
// $arr = json_decode($str,true);
// $arr = json_decode($str);
// var_dump($arr->c);


$obj = new \stdClass();

$obj->a =1;
$obj->b = 2;

var_dump($obj);

$arr = [1,2,3];
$obj = (object)$arr;
var_dump($obj->{1});


?>