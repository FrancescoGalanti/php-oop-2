<?php  include_once __DIR__ . "/Ecomerce.php";


class Product extends Ecomerce{
    public  $Product;

    function __construct($Name,$Price,$Lasting, $User,$Product ){
        parent::__construct($Name,$Price,$Lasting, $User,);

        $this->Product = $Product;
    }

}
