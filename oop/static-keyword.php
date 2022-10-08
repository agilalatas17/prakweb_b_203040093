<?php

// Static Keyword
/*
    Untuk Apa ?
        - Member (properti dan method) yang terikat dengan class, bukan dengan object
        - Nilai static akan selalu tetap meskipun object di instansiasi berulang kali
        - Membuat kode menjadi 'prosedural'

    Kapan digunakan ?
        - Biasanya digunakan untuk membuat fungsi bantuan / helper
        - Atau digunakan di class-class utility pada framework
*/

class ContohStatic {
    public static $angka = 1;

    public static function halo() {
        return "Halo. " . self::$angka++ . " kali.";
    }
}

echo ContohStatic::$angka;
echo "<br>";
echo ContohStatic::halo();
echo "<hr>";
echo COntohStatic::halo();