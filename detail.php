<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Data Buku</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                Data Buku
            </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collaps" data-bs-target="navbarNavAltMarkup" arria-controls="page">
                    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ms-auto">
        <a  class= "nav-link active" arria-current="page" href="create.php">Tambah Buku</a>
        <a class="nav-link" href="#">Features</a>
        <a class="nav-link" href="#">Pricing</a>
        </div>
    </div>
    </div>
    </nav>

    <?php
        include 'config.php';

        $id = $_GET['id'];

        $bukuaku = mysqli_query($koneksi, "select*from bukuaku where id='$id'");
        while($data = mysqli_fetch_assoc($bukuaku)){
            ?>
            <div class = "container mt-5">
                <p><a href="index.php">Home</a> / Detail Buku / <?php echo $data['nama_buku'] ?><p>
                <div class = "card">
                    <div class ="card-header">
                        <p class="fw-blod">Profil Buku</p>
                    </div>
                    <div class="card-body fw-bold">
                        <p>Nama Buku : <?php echo $data['nama_buku'] ?></p>
                        <p>Kategrori Buku : <?php echo $data['kategori_buku'] ?></p>
                        <p>Penerbit : <?php echo $data['penerbit'] ?></p>
                        <p>Harga : <?php echo $data['harga'] ?></p>
                        <p>Diskon : <?php echo $data['diskon'] ?></p>
                        <a href = "print.php?id=<?php echo $data['id']; ?>" class="btn btn-primary btn-sm text-white">CETAK </a>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
        </div>
        <script src ="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>