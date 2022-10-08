<?php
    require '../function.php';

    //mengambil id dari url
    $id = $_GET['id'];

    //melakukan query dengan parameter id yang diambil dari url
    $buku = query("SELECT * FROM buku WHERE id = $id")[0];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- my css -->
    <link rel="stylesheet" href="../css/detail.css?v2">

    <!-- bootstrap css -->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <title>Detail Buku</title>
</head>

<body>
    <div class="container">

        <table>
            <tbody>
                <tr>
                    <td colspan="2">
                        <div class="gambar text-center">
                            <img src="../assets/image/<?= $buku["gambar"]; ?>" class="rounded shadow">
                        </div>
                    </td>
                </tr>
                <tr>
                    <th class="ket-data">Judul Buku</th>
                    <td>
                        <div class="keterangan">
                            <p class="judul-buku"><?= $buku["judul_buku"]; ?></p>
                        </div>
                    </td>
                </tr>

                <tr>
                    <th class="ket-data">Sinopsis</th>
                    <td>
                        <div class="keterangan">
                            <p><?= $buku["sinopsis"]; ?></p>
                        </div>
                    </td>
                </tr>

                <tr>
                    <th class="ket-data">Pengarang</th>
                    <td>
                        <div class="keterangan">
                            <p><?= $buku["pengarang"]; ?>
                            </p>
                        </div>
                    </td>
                </tr>

                <tr>
                    <th class="ket-data">Penerbit</th>
                    <td>
                        <div class="keterangan">
                            <p><?= $buku["penerbit"]; ?></p>
                        </div>
                    </td>
                </tr>

                <tr>
                    <th class="ket-data">Tahun Terbit</th>
                    <td>
                        <div class="keterangan">
                            <p><?= $buku["tahun_terbit"]; ?></p>
                        </div>
                    </td>
                </tr>

                <tr>
                    <th class="ket-data">Harga</th>
                    <td>
                        <div class="keterangan">
                            <p>Rp. <?= $buku["harga"]; ?></p>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <div class="back-btn text-center">
                            <a class="btn btn-secondary" href="../index.php">Kembali</a>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>