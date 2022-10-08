<?php
    // menghubungkan dengan file php lainnya
    require './function.php';

    $daftar_buku = query ("SELECT * FROM buku");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- fontawesome css -->
    <link rel="stylesheet" href="./css/fontawesome.min.css" />

    <!-- bootstrap css -->
    <link rel="stylesheet" href="./css/bootstrap.css">

    <!-- my css -->
    <link rel="stylesheet" href="./css/index.css?v2">
    <title>Daftar Buku</title>
</head>

<body>
    <div class="container">
        <div class="wrapper-cta my-3">
            <div class="go-to-admin-page my-3">
                <a href="./pages/tambah.php" class="btn btn-success">Tambah Data Buku</a>
            </div>
        </div>



        <table class="table table-striped">
            <thead>
                <tr class="bg-success text-center text-white">
                    <th scope="col">No.</th>
                    <th scope="col">Gambar</th>
                    <th scope="col" colspan="2">Judul</th>
                </tr>
            </thead>
            <tbody>

                <?php $i = 1; ?>
                <?php foreach($daftar_buku as $buku) : ?>
                <tr>
                    <td>
                        <div class="id-buku">
                            <p class="text-center"><?= $i; ?>.</p>
                        </div>
                    </td>
                    <td>
                        <div class="img-wrapper my-3">
                            <img src="./assets/image/<?= $buku["gambar"] ?>" alt="">
                        </div>
                    </td>
                    <td class="d-flex justify-content-between align-items-center">
                        <div class="judul-buku">
                            <p><?= $buku["judul_buku"]; ?></p>
                        </div>
                        <div class="btn-detail-buku">
                            <a class="btn btn btn-info btn-sm" href="./pages/detail.php?id=<?= $buku["id"]; ?>">Lihat
                                Detail Buku</a>
                        </div>
                    </td>
                </tr>
                <?php $i++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

<!-- fontawesome js -->
<script src="./js/fontawesome.min.js"></script>

</html>