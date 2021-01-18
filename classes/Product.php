<?php  include_once __DIR__ . "/Ecomerce.php";


class Product extends Ecomerce{
    public  $Product;

    function __construct($Name,$Price,$Lasting, $User,$Product ){
        $Product = parent::__construct();

        $this->Product = $Product;
    }

}
