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
    <link rel="stylesheet" href="./css/style.css">

    <title>Detail Buku</title>
</head>

<body>
    <div class="container my-5">
        <div class="row">
            <div class="col-md-5">
                <img src="./assets/image/<?= $buku["gambar"]; ?>" class="shadow w-50" alt="">
            </div>

            <div class="col-md-7">
                <h3>Sinopsis</h3>
                <p><?= $buku["sinopsis"]; ?></p>
            </div>
        </div>
    </div>


    <script src="./js/bootstrap.bundle.js"></script>
</body>

</html>