<?php
    // define(); hanya bisa digunakan diluar class
    define('NAMA', 'Agil Alatas');

    echo NAMA;

    echo '<br>';

    // 'const' bisa digunakan didalam class
    const UMUR = 21;
    echo UMUR;

    echo "<br>";

    class Coba {
        const NAMA = 'Agil Alatas';
    }

    echo Coba::NAMA;


    // Magic Constant
    /*
        • __LINE__
        • __FILE__
        • __DIR__
        • __FUNCTION__
        • __CLASS__
        • __TRAIT__
        • __METHOD__
        • __NAMESPACE__
    */

    echo __LINE__; // akan menampilkan baris, code yang ditulis

    echo '<br>';

    function coba2() {
        return __FUNCTION__;
    }

    echo coba2();
?>