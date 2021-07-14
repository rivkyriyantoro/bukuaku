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
            <a class="navbar-brand" href="#">Data Buku</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collaps" data-bs-target="navbarNavAltMarkup" arria-current="page">
                    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ms-auto">
        <a  class= "nav-link active" arria-current="page" href="Index.php">Home</a>
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
                   <div class=" card-body fw-bold">
                        <form method="post" action="update.php">
                            <div class ="mb-3">
                                <input type="hidden" class="form-control" name='id' value="<?php echo $data['id']; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama Buku</label>
                                <input type="txt" class="form-control" id="nama" placeholder="Masukkan Nama Buku" name="nama_buku" value="<?php echo $data['nama_buku']; ?>">
                            </div>

                            <div class="mb-3">
                                <label for="NIM" class="form-label">Kategori Buku</label>
                                <input type="txt" class="form-control" id="kategori_buku" placeholder="Masukkan kategori buku" name="kategori_buku" value="<?php echo $data['kategori_buku']; ?>">
                            </div>

                            <div class="mb-3">
                                <label for="alamat" class="form-label">Penerbit</label>
                                <input type ="txt" class="form-control" id="penerbit" placeholder="Masukkan  penerbit" name="penerbit" value="<?php echo $data['penerbit']; ?>"></textarea>
                            </div>

                            
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Harga</label>
                                <input type ="txt" class="form-control" id="harga" placeholder="Masukkan  harga" name="harga" value="<?php echo $data['harga']; ?>"></textarea>
                            </div>

                            
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Diskon</label>
                                <input type ="txt" class="form-control" id="diskon" placeholder="Masukkan  diskon" name="diskon" value="<?php echo $data['diskon']; ?>"></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
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