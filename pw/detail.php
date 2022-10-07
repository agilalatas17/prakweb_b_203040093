<?php
    require "function.php";
    $id = $_GET['id'];
    $buku = query("SELECT * FROM buku WHERE id = $id")[0];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/style.css?v2">

    <title>Detail Buku</title>
</head>

<body>
    <div class="container my-5">
        <div class="row">
            <div class="col-md-4">
                <img src="./assets/image/<?= $buku["gambar"]; ?>" class="shadow w-100" alt="">
            </div>

            <div class="col-md-8">
                <div>
                    <h2><?= $buku["judul_buku"] ?></h2>

                    <h3 class="mt-5">Sinopsis</h3>
                    <p><?= $buku["sinopsis"]; ?></p>
                    <div class="d-flex justify-content-between align-items-end">
                        <div class="">
                            <p><b>Pengarang : </b> <?= $buku["pengarang"]?></p>
                            <p><b>Penerbit : </b> <?= $buku["penerbit"]?></p>
                            <p><b>Tahun Terbit : </b> <?= $buku["tahun_terbit"]?></p>
                            <h3 class="mt-4 mb-0">Rp. <?= $buku["harga"] ?></h3>
                        </div>
                        <div>
                            <a href="./index.php" class="btn btn-info text-white">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="./js/bootstrap.bundle.js"></script>
</body>

</html>