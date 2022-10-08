<?php

// Static Keyword
/*
    Untuk Apa ?
        - Member (properti dan method) yang terikat dengan class, bukan dengan object
        - Nilai static akan selalu tetap meskipun object di instansiasi berulang kali
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