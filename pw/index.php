<?php 
    require "function.php";

    $daftar_buku = query ("SELECT * FROM buku");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Daftar Buku</title>
</head>

<body>

    <div class="row gap-3 justify-content-center my-5">

        <?php $i = 1; ?>
        <?php foreach($daftar_buku as $buku) : ?>
        <div class="card shadow-sm p-4">
            <img src="../assets/image/<?= $buku["gambar"]; ?>" class="card-img-top" alt="...">
            <div class="card-body pt-2 px-0">
                <h5 class="card-title text-truncate"><?= $buku["judul_buku"]; ?></h5>
                <p class="card-text"><?= $buku["pengarang"]; ?></p>

                <div class="text-center mt-4">
                    <a href="detail.php?id=<?= $buku["id"]; ?>" class="btn btn-primary">Lihat Detail</a>
                </div>
            </div>
        </div>
        <?php $i++; ?>
        <?php endforeach ?>

    </div>

    <!-- Bootstrap -->
    <script src="/js/bootstrap.bundle.js"></script>
</body>

</html>