<?php

        $nilai_matematika = "92";
        $nilai_ipa ="87";
        $nilai_bahasa ="90";
        //hitung nilai rata ratab
        $nilai_rata_rata =($nilai_matematika + $nilai_ipa + $nilai_bahasa)/3;

        ///tampilkan nilai keseluruhan

        echo "matematila : {$nilai_matematika} <br>";
        echo "ipa : {$nilai_ipa} <br> ";
        echo "bahasa {$nilai_bahasa} <br>";
        //lihat nilai tersebut
        echo "nilai rata ratanya adalah :";
        print_r($nilai_rata_rata);
        echo "mantap <br>";
        

        //rumus menghitung aritmatika
        $alas =60;
        $tinggi =80;
        echo "alas $alas <br>";
        echo "tinggi $tinggi<br>";
        //luas persegi
        
        $luas =($alas * $tinggi)/2;
        echo "luas {$luas}"

?>