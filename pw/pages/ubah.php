<?php
    require '../function.php';

    $id = $_GET['id'];
    $buku =  query("SELECT * FROM buku WHERE id = $id")[0];

    if(isset($_POST['ubah'])) {
        if(ubah($_POST) > 0) {
            echo "<script>
                alert('Data Berhasil diubah!');
                document.location.href = '../index.php';
            </script>";
        } else {
            echo "<script>
            alert('Data Gagal diubah!');
            document.location.href = '../index.php';
        </script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- My CSS -->
    <link rel="stylesheet" href="../css/ubah.css?v2" />

    <!-- Bootstrap css -->
    <link rel="stylesheet" href="../css/bootstrap.css" />
    <title>Ubah Data Buku</title>
</head>

<body>
    <h1>Form Ubah Data Buku</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group hidden-input">
            <div>
                <input type="hidden" class="form-control-file" name="id" value="<?= $buku['id']; ?>">
                <input type="hidden" class="form-control-file" name="gambarLama" value="<?= $buku['gambar']; ?>">
            </div>
        </div>
        <div class="form-group">
            <label for="gambar">Gambar</label>
            <div>
                <img src="../assets/img/<?= $buku['gambar']; ?>">
                <input type="file" class="form-control-file " name="gambar" id="gambar">
            </div>
        </div>
        </div>
        <div class="form-group">
            <label for="judul-buku">Judul Buku</label>
            <div>
                <input type="text" class="form-control" name="judul_buku" id="judul-buku" required
                    value="<?= $buku['judul_buku']; ?>">
            </div>
        </div>
        <div class="form-group">
            <label for="desk">Deskripsi</label>
            <div>
                <textarea class="form-control input-textarea" name="deskripsi" id="desk"
                    required><?= $buku['deskripsi']; ?></textarea>
            </div>
        </div>
        <div class="form-group">
            <label for="penulis">Penulis</label>
            <div>
                <input type="text" class="form-control" name="penulis" id="penulis" required
                    value="<?= $buku['penulis']; ?>">
            </div>
        </div>
        <div class="form-group">
            <label for="tahun-terbit">Tahun Terbit</label>
            <div>
                <input type="number" class="form-control" name="tahun_terbit" id="tahun-terbit" required
                    value="<?= $buku['tahun_terbit']; ?>">
            </div>
        </div>
        <div class="form-group">
            <label for="penerbit">Penerbit</label>
            <div>
                <input type="text" class="form-control" name="penerbit" id="penerbit" required
                    value="<?= $buku['penerbit']; ?>">
            </div>
        </div>
        <div class="form-group">
            <label for="stok">Stok Buku</label>
            <div>
                <input type="number" class="form-control" name="stok" id="stok" required value="<?= $buku['stok']; ?>">
            </div>
        </div>
        <div class="form-group">
            <label for="harga">Harga</label>
            <div>
                <input type="text" class="form-control" name="harga" id="harga" required value="<?= $buku['harga']; ?>">
            </div>
        </div>
        <div class="form-btn text-center">
            <button type="submit" class="add-btn btn btn-primary btn-lg btn-block mb-1 mt-6" name="ubah">Ubah
                Data!</button>
            <br>
            <button class="btn btn-secondary btn-lg">
                <a href="../index.php" class="text-white" style="text-decoration: none; color: black;">Kembali</a>
            </button>
        </div>

    </form>
</body>

</html>