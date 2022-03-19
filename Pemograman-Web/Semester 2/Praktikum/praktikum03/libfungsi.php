<?php
function kelulusan($nilai)
{
    if ($nilai > 55) {
        return 'LULUS';
    } else {
        return 'TIDAK LULUS';
    }
}
function predikat($_grade) {
    switch ($_grade) {
        case 'E':
            $_predikat = 'Sangat Kurang';
            echo 'Predikat: ' . $_predikat . '<br>';
            break;
        case 'D':
            $_predikat = 'Kurang';  
            echo 'Predikat: ' . $_predikat . '<br>';
            break;
        case 'C':
            $_predikat = 'Cukup';
            echo 'Predikat: ' . $_predikat . '<br>';
            break;
        case 'B':
            $_predikat = 'Baik';
            echo 'Predikat: ' . $_predikat . '<br>';
            break;
        case 'A':
            $_predikat = 'Sangat Baik';
            echo 'Predikat: ' . $_predikat . '<br>';
            break;
        default:
            $_predikat = 'Tidak Ada';
            echo 'Predikat: ' . $_predikat . '<br>';
            break;
    }
}