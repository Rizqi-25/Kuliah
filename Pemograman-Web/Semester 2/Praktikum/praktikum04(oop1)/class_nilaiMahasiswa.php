<?php

class NilaiMahasiswa {
    public $matkul, $nilai, $nim;

    function __construct($nim, $matkul, $nilai)
    {
        $this->nim = $nim;
        $this->matkul = $matkul;
        $this->nilai = $nilai;
    }

    function grade() {
        if ($this->nilai >= 0 && $this->nilai <= 35) return 'E';
        elseif ($this->nilai <= 55) return 'D';
        elseif ($this->nilai <= 69) return 'C';
        elseif ($this->nilai <= 84) return 'B';
        elseif ($this->nilai <= 100) return 'A';
    }

    function hasil() {
        return $this->nilai < 56 ? 'Tidak Lulus' : 'Lulus';
    }

}