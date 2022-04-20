<?php
class BMIPasien{
    public $id;
    public $bmi;
    public $tanggal;
    public $pasien;


    public function __construct($id, $bmi, $tanggal, $pasien){
        $this->id = $id;
        $this->bmi = $bmi;
        $this->tanggal = $tanggal;
        $this->pasien = $pasien;
    }
}


//     public function __construct($kode, $nama, $tmp_lahir, $tgl_lahir, $email, $gender){
//         $this->kode = $kode;
//         $this->nama = $nama;
//         $this->tmp_lahir = $tmp_lahir;
//         $this->tgl_lahir = $tgl_lahir;
//         $this->email = $email;
//         $this->gender = $gender;
//     }
// }
// trait BMI{
//     public $tinggibadan;
//     public $beratbadan;
//     public $bmi;

//     public function hasilbmi(){
//         $tinggibadanMeter = $this->tinggibadan/100;
//         $this->bmi = ($this->beratbadan / pow($tinggibadanMeter, 2));
//         return $this->bmi;
//     }

//     public function statusbmi(){
//         $hasil = $this->hasilbmi();
//         if($hasil < 18.5){
//             return "Kekurangan Berat Badan";
//         }elseif($hasil >= 18.5 && $hasil <= 24.9){
//             return "Normal (Ideal)";
//         }elseif($hasil >= 25 && $hasil <= 29.9){
//             return "Kelebihan Berat Badan";
//         }elseif($hasil >= 30 && $hasil <= 39.9){
//             return "Obesitas";
//         }else{
//             return "Obesitas Berat";
//         }
//     }
// }

// class BMIPasien extends Pasien{
//     use BMI;
//     public $tanggal;

//     public function __construct($nama, $tmp_lahir, $tgl_lahir, $email, $beratbadan, $tinggibadan, $tanggal){
//         parent::__construct($nama, $tmp_lahir, $tgl_lahir, $email, $beratbadan, $tinggibadan, $tanggal);
//         $this->beratbadan = $beratbadan;
//         $this->tinggibadan = $tinggibadan;
//         $this->tanggal = date('Y-m-d');
//     }
// }
?>