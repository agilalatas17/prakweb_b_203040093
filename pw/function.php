<?php
    function koneksi_db () {
        $hostname = "localhost";
        $username = "root";
        $pass = "";
        $db = "prakweb_2022_b_203040093";
        $conn = mysqli_connect($hostname, $username, $pass);

        mysqli_select_db($conn, $db);
        return $conn;
    }


    function query($sql) {
        $conn = koneksi_db();
                             $result = mysqli_query($conn, "$sql");
        $rows = [];

        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }
?>