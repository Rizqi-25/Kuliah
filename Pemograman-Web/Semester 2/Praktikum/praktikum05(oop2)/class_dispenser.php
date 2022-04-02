<?php
class Dispenser {
    protected $volumeGalon = 0;
    protected $hargaSegelas;
    private $volumeGelas = 250;
    public $namaMinuman;
    private $saldo = 100000;
    private $jumlahgelas = 10;

    public function default(int $vol, int $saldo, int $jumlahgelas, int $volumeGelas){
        $this->volumeGalon = $vol;
        $this->saldo = $saldo;
        $this->jumlahgelas = $jumlahgelas;
        $this->volumeGelas = $volumeGelas;
    }

    public function infoDispenser(){
        echo "Volume Galon : ".$this->volumeGalon."<br>";
        echo "Harga Segelas : ".$this->hargaSegelas."<br>";
        echo "Volume Gelas : ".$this->volumeGelas."<br>";
        echo "Saldo : ".$this->saldo."<br>";
        echo "Jumlah Gelas : ".$this->jumlahgelas."<br>";
    }

    public function isiGalon($vol){
        if ($vol > 0){
            $this->volumeGalon += $vol;
            echo "Anda telah menambahkan Volume Galon sebesar ".$vol." ml<br>";
        }
        else{
            echo "Volume Galon tidak boleh kurang dari 0<br>";
        }
    }

    public function isiGelas(){
        if ($this->volumeGalon >= $this->volumeGelas && $this->jumlahgelas > 0){
            $this->jumlahgelas--;
            $this->volumeGalon -= $this->volumeGelas;
            echo "Anda telah menuangkan air kedalam gelas berukuran ". $this->volumeGelas." ml dengan harga segelas Rp. ".$this->hargaSegelas."<br>";
        }
        elseif ($this->volumeGalon < $this->volumeGelas){
            echo "Volume Galon tidak mencukupi untuk dibuat segelas<br>";
        }
        elseif ($this->jumlahgelas == 0){
            echo "Gelas habis<br>";
        }
    }

    public function refillGelas(int $gelas){
        $harga = 500;
        $totalHarga = $gelas * $harga;
        if ($this->saldo >= $totalHarga && $totalHarga >= $harga){
            $this->saldo -= $totalHarga;
            $this->jumlahgelas += $gelas;
            echo "Anda telah menambahkan ".$gelas." gelas dengan harga Rp. ".$totalHarga."<br>";
        }
        elseif ($this->saldo < $totalHarga){
            echo "Saldo tidak mencukupi<br>";
        }
        elseif ($totalHarga < $harga){
            echo "Harga tidak boleh kurang dari Rp. 500. Masukkan jumlah gelas dengan benar<br>";
        }
    }


}

class Minuman extends Dispenser {
    public function __construct($nama, $harga){
        $this->namaMinuman = $nama;
        $this->hargaSegelas = $harga;
    }

    public function infoMinuman(){
        echo "Nama Minuman : ".$this->namaMinuman."<br>";
        echo "Harga Segelas : ".$this->hargaSegelas."<br>";
    }
}
    
?>