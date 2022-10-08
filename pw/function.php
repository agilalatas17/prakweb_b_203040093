<?php
    //melakukan koneksi ke database
    function koneksi_db () {
        $hostname = "localhost";
        $username = "root";
        $pass = "";
        $db = "prakweb_2022_b_203040093";
        $conn = mysqli_connect($hostname, $username, $pass);

        mysqli_select_db($conn, $db);
        return $conn;
    }

    // melakukan query dan memasukkan ke dalam array
    function query($sql) {
        $conn = koneksi_db();
                             $result = mysqli_query($conn, "$sql");
        $rows = [];

        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }

    // Menambahkan data didalam database
    function tambah($data) {
        $conn = koneksi_db();

        // Upload Gambar
        $gambar = upload();
        if (!$gambar) {
            return false;
        }

        $judul_buku = htmlspecialchars($data['judul_buku']);
        $sinopsis = htmlspecialchars($data['sinopsis']);
        $pengarang = htmlspecialchars($data['pengarang']);
        $penerbit = htmlspecialchars($data['penerbit']);
        $tahun_terbit = htmlspecialchars($data['tahun_terbit']);
        $harga = htmlspecialchars($data['harga']);

        $query = "INSERT INTO buku VALUES
                    ('', '$gambar', '$judul_buku', '$sinopsis', '$pengarang', '$penerbit', '$tahun_terbit', '$harga')";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    // Fungsi Upload Gambar
    function upload () {
        $fileName = $_FILES['gambar']['name'];
        $fileSize = $_FILES['gambar']['size'];
        $error = $_FILES['gambar']['error'];
        $tmpName = $_FILES['gambar']['tmp_name'];

        // cek gambar yang di upload
        if($error === 4) {
            echo "<script>
                    alert('Gambar belum di Masukkan!');    
                </script>";
            return false;
        }

        // cek upload adalah gambar
        $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
        $ekstensiGambar = explode('.', $fileName);
        $ekstensiGambar = strtolower(end($ekstensiGambar));

        if(!in_array($ekstensiGambar, $ekstensiGambarValid)) {
            echo "<script>
                    alert('Yang Anda upload bukan gambar');
                </script>";
            return false;
        }

        //cek ukuran gambar 
        if($fileSize > 1000000) {
            echo "<script>
                    alert('Ukuran terlalu Besar, Maksimal 2MB');
                </script>";
            return false;
        }

        //generate nama gambar baru
        $newFileName = uniqid();
        $newFileName .= '.';
        $newFileName .= $ekstensiGambar;
        // gambar siap di upload
        move_uploaded_file($tmpName, '../pw/assets/image/' . $newFileName);
        return $newFileName;
    }

    // Function Ubah Data
    function ubah($data) {
        $conn = koneksi_db();

        $id = htmlspecialchars ($data['id']);
        $gambar = htmlspecialchars ($data['gambar']);
        $gambarLama = htmlspecialchars ($data['gambarLama']);
        $judul_buku = htmlspecialchars ($data['judul_buku']);
        $sinopsis = htmlspecialchars ($data['sinopsis']);
        $pengarang = htmlspecialchars ($data['pengarang']);
        $penerbit = htmlspecialchars ($data['penerbit']);
        $tahun_terbit = htmlspecialchars ($data['tahun_terbit']);
        $harga = htmlspecialchars ($data['harga']);

        // cek user upload gambar baru atau tidak
        if($_FILES['gambar']['error'] === 4) {
            $gambar = $gambarLama;
        } else {
            $gambar = upload();
        }

        //query update data
        $query = "UPDATE buku
                SET
                gambar = '$gambar',
                judul_buku = '$judul_buku',
                sinopsis = '$sinopsis',
                pengarang = '$pengarang',
                penerbit = '$penerbit',
                tahun_terbit = $tahun_terbit,
                harga = '$harga'
                WHERE id = '$id'
                ";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }
   
?>