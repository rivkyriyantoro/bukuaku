<?php
    include 'config.php';
    $id = $_GET['id'];
    $bukuaku = mysqli_query($koneksi, "select * from bukuaku where id='$id'");
    while($data = mysqli_fetch_assoc($bukuaku)){
    ?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" >
            <title> <?php echo $data['nama_buku']?> </title>
        </head>

        <body onload="window.print();"> 
            <div class="container mt-5">
                <p class="fw-bold">Profil Buku</p>
                <p>Nama Buku : <?php echo $data['nama_buku'] ?></p>
                <p>Kategori Buku : <?php echo $data['kategori_buku'] ?></p>
                <p>Penerbit : <?php echo $data['penerbit'] ?></p>
                <p>Harga : <?php echo $data['harga'] ?></p>
                <p>Diskon : <?php echo $data['diskon'] ?></p>
            </div>
        <?php
    }
        ?>
        </div>
        <script src ="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
        </body>

        </html>