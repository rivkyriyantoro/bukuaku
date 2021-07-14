<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap5.min.css">
    <title>Data Buku</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
        
            <a class="navbar-brand" href="#">Data Buku</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collaps" data-bs-target="navbarNavAltMarkup" arria-current="page">
                    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class= "nav-link active" arria-current="page" href="index.php">Beranda </a>
                    </li>

                    <li class="nav-item">
                        <a class= "nav-link active" arria-current="page" href="login.html">Keluar</a>
                    </li>
                </ul>
            </div>
    </div>
    </div>
    </nav>
    <div class="container data-buku mt-5">


     <!-- Button trigger modal -->
     <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#tambahData">
        Tambah Data Buku
    </button>
    <!-- Modal -->
    <div class="modal fade" id="tambahData" tabindex="-1" aria-labelledby="tambahDataLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <form method="post" action="create.php" name="form">
                    <div class="modal-header">
                        <h5 class="modal-title" id="tambahDataLabel">Data Buku</h5>
                        
                        <button type="button"  class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <div class="mb-3">
                            <label for="nama_buku" class="form-label">Nama Buku</label>
                            <input type="txt" class="form-control" id="nama_buku" placeholder="Masukkan Nama Buku" name="nama_buku" required>
                        </div>

                        <div class="mb-3">
                                <label for="kategori_buku" class="form-label">Kategori Buku</label>
                                <input type="txt" class="form-control" id="kategori_buku" placeholder="Masukkan kategori_buku" name="kategori_buku" required>
                        </div>

                        <div class="mb-3">
                            <label for="penerbit" class="form-label">Penerbit</label>

                            <textarea type ="txt" class="form-control" id="penerbit" placeholder="Masukkan Penerbit" name="penerbit" required></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="harga" class="form-label">harga</label>

                            <textarea type ="txt" class="form-control" id="harga" placeholder="Masukkan harga" name="harga" required></textarea>
                        </div>

                    

                    </div>
                    <div class="modal-footer">

                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                        <button type="submit" class="btn btn-primary">SIMPAN</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <table class="table table-striped" id="tabelbukuaku">
      <thead>
        <tr>
        <th scope="col"> No.</th>
        <th scope="col"> Nama Buku</th>
        <th scope="col"> Kategori Buku</th>
        <th scope="col"> Penerbit</th>
        <th scope="col"> Harga</th>
        <th scope="col"> Diskon</th>
 
        </tr>
      </thead>
    <tbody>
        <?php
        include 'config.php';

        $no = 1;

        $bukuaku = mysqli_query($koneksi, "select*from bukuaku");

        
        while($data = mysqli_fetch_array($bukuaku)){
            ?>

            <tr>
            <td><?php echo $no++; ?></td>

            <td><?php echo $data['nama_buku']; ?></td>
            <td><?php echo $data['kategori_buku']; ?></td>
            <td><?php echo $data['penerbit']; ?></td>
            <td><?php echo $data['harga']; ?></td>
            <td><?php echo $data['diskon']; ?></td>
           



            <td>
            <a href="detail.php?id=<?php echo $data['id']; ?>" class="btn btn-success btn-sm text-white">DETAIL</a>
            <a href="edit.php?id=<?php echo $data['id']; ?>" class="btn btn-warning btn-sm text-white">EDIT</a>

            <a href="delete.php?id=<?php echo $data['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Anda Yakin Akan Menghapus Data Mahasiswa Ini?')">HAPUS</a>
            </td>
            </tr>
            <?php
        }
        ?>
    </tbody>
    </table>
    </div>
    <script src ="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap5.min.js"></script>
    <script>
       $(document).ready(function() {
    $('#tabelbukuaku').DataTable();
} );
    </script>
</body>
</html>