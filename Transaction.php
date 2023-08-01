<?php
class Transaction
{
    private float $amount;
    // private $amount;
    private string $description;

    public function  __construct(float $amount,string $description)
    {
        $this->amount = $amount;
        $this->description= $description;
    }
    public function addTax(float $rate)
    {
        $this->amount += $this->amount * $rate /100;
    }
    public function applyDiscount(float $rate)
    {
        $this->amount -= $this->amount *$rate /100;
    }
    public function getAmount():float
    {
        return $this->amount;
    }
    public function __destruct()
    {
        echo "Destructor called";
   
    }

}
class Abc
{
    public function __destruct()
    {
       
        echo "ABC Destructor called";
     
    }
}
?>