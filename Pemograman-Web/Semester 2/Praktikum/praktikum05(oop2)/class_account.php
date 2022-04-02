<?php
class Account{
    protected $saldo;
    protected $nomorRekening;

    public function __construct($saldo, $nomorRekening){
        $this->saldo = $saldo;
        $this->nomorRekening = $nomorRekening;
    }

    public function deposit($uang){
        if ($uang > 0){
            $this->saldo += $uang;
            echo "Anda telah menambahkan uang sebesar Rp. ".$uang."<br>";
        }
        else{
            echo "Uang tidak boleh kurang dari 0<br>";
        }
    }

    public function withdraw($uang){
        if ($this->saldo >= $uang){
            $this->saldo -= $uang;
        }
        else{
            echo "Saldo tidak mencukupi<br>";
        }
    }

    public function infoAccount(){
        echo "Nomor Rekening : ".$this->nomorRekening."<br>";
        echo "Saldo : Rp. ".$this->saldo."<br>";
    }
}
?>