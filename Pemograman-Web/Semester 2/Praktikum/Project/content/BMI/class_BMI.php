<?php
class BMI
{
    public $tinggi;
    public $berat;

    public function __construct($tinggi, $berat)
    {
        $this->tinggi = $tinggi;
        $this->berat = $berat;
    }

    public function hasilbmi()
    {
        $tinggibadanMeter = $this->tinggi / 100;
        $this->bmi = ($this->berat / pow($tinggibadanMeter, 2));
        return number_format($this->bmi, 1);
    }

    public function statusbmi()
    {
        $hasil = $this->hasilbmi();
        if ($hasil < 18.5) {
            return "Kekurangan Berat Badan";
        } elseif ($hasil >= 18.5 && $hasil <= 24.9) {
            return "Normal (Ideal)";
        } elseif ($hasil >= 25 && $hasil <= 29.9) {
            return "Kelebihan Berat Badan";
        } elseif ($hasil >= 30 && $hasil <= 39.9) {
            return "Obesitas";
        } else {
            return "Obesitas Berat";
        }
    }
}
