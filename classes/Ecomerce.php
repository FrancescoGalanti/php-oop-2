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

    protected function Discount(){
        return ($this->Lasting < 5) ? $this->Price * 0.80 : $this->Price * 1;
    }

    public function SetName($Name){
        $this->Name = $Name;
    }

    public function GetName(){
        return $this->Name = $Name;
    }



}