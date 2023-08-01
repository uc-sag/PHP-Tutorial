<?php
require_once './Paddle/Transaction.php';
require_once './Stripe/Transaction.php';

// use function PaymentGateway\Stripe\Transaction;
// use const PaymentGateway\Stripe\Transaction;


use PaymentGateway\Stripe\Transaction;
var_dump(new Transaction());

?> 