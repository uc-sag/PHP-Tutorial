<?php
require_once 'Transaction.php';
require_once 'Customer.php';
require_once 'PaymentProfile.php';
$transaction = new Transaction(200,"Transaction 1");
$customer = new Customer();
echo $transaction?->customer()?->id() ?? "foo";

?>