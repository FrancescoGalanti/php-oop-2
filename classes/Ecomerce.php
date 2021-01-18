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

    public function PrintName() {
        return $this->Name;
    }
    public function PrintPrice() {
        return $this->Price;
    }
    public function PrintLasting() {
        return $this->Lasting;
    }
    public function PrintUser() {
        return $this->User;
    }

    private function Optimizing(){
        
    }
}