<?php
require_once 'class_account.php';

class BankAccount extends Account{
    public $customerName;

    public function __construct($saldo, $nomorRekening, $customerName){
        parent::__construct($saldo, $nomorRekening);
        $this->customerName = $customerName;
    }

    public function infoAccount(){
        parent::infoAccount();
        echo "Nama Customer : ".$this->customerName."<br>";
    }

    public function tranfer($obj_account, $uang){
        $obj_account->deposit($uang);
        $this->withdraw($uang);
    }

    public function noRek(){
        return $this->nomorRekening;
    }

    public function saldo(){
        return $this->saldo;
    }
}
?>