<?php

class MenghitungBangunRuang{
    public function luasPersegiPanjang($panjang, $lebar){
        $luas = $panjang * $lebar;
        return $luas;
    }

    public function kelilingPersegiPanjang($panjang, $lebar){
        $keliling = 2 * ($panjang + $lebar);
        return $keliling;
    }

    public function luasPersegi($sisi){
        $lp = $sisi * $sisi;
        return $lp;
    }

    public function kelilingPersegi($sisi){
        $kp = 4 * $sisi;
        return $kp;
    }

    public function luasSegitiga($alas, $tinggi){
        $luas = 0.5 * $alas * $tinggi;
        return $luas;
    }

    public function luasLingkaran($r){
        $luas = 3.14 * pow($r, 2);
        return $luas;
    
    }
    public function kelilingLingkaran($r){
        $keliling = 2 * 3.14 * $r;
        return $keliling;
    }
}

$bangunRuang = new MenghitungBangunRuang();
$luasPersegiPanjang = $bangunRuang->luasPersegiPanjang(4, 2);
echo "Luas Persegi Panjang adalah $luasPersegiPanjang";

$kelilingPersegiPanjang = $bangunRuang->kelilingPersegiPanjang(8, 5);
echo "Keliling Persegi Panjang adalah $kelilingPersegiPanjang\n";

$luasPersegi = $bangunRuang->luasPersegi(6);
echo "Luas Persegi adalah $luasPersegi\n";

$kelilingPersegi = $bangunRuang->kelilingPersegi(2);
echo "Keliling Persegi adalah $luasPersegi\n";

$luasSegitiga = $bangunRuang->luasSegitiga(4, 7);
echo "Luas Segitiga adalah $luasSegitiga\n";

$luasLingkaran = $bangunRuang->luasLingkaran(8);
echo "Luas Lingkaran adalah $luasLingkaran\n";

$kelilingLingkaran = $bangunRuang->kelilingLingkaran(8);
echo "Keliling Lingkaran adalah $kelilingLingkaran";

?>