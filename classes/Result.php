<?php  include_once __DIR__ . "/Ecomerce.php";

class Result extends Ecomerce{
    
    public function GetOut(){
       $result = $this->Discount();
       return $result;
    }
}