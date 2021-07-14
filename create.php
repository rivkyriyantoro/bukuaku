<?php

include './config.php';

$nama_buku = $_POST['nama_buku'];
$kategori_buku = $_POST['kategori_buku'];
$penerbit = $_POST['penerbit'];
$harga = $_POST['harga'];
$diskon = (10/100)*$_POST['harga'];

mysqli_query($koneksi, "insert into bukuaku values('','$nama_buku','$kategori_buku','$penerbit','$harga','$diskon')");

header("location:./index.php");
