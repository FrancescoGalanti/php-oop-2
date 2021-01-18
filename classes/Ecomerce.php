<?php

class Ecomerce {
    public  $Name;
    public  $Price;
    public  $Lasting;
    public  $User;

    function __construct($Name,$Price,$Lasting, $User ) {
        $this->Name = $Name;
        $this->Price = $Price;
        $this->Lasting = $Lasting;
        $this->User = $User;

    }
}