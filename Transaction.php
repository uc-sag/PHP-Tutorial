<?php
declare(strict_types =1);
class Transaction
{
   public const STATUS_PAID = 'paid';
   public const STATUS_PENDING = 'pending';
   public const STATUS_DECLINED = 'declined';

   public static int $count =0;

   public function __construct()
   {
     var_dump(self::STATUS_PAID);
     self::$count++;
   }

    
}

?>