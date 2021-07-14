<?php

include 'config.php';

$id = $_GET['id'];

mysqli_query($koneksi, "delete from bukuaku  where id ='$id'");

header("location:index.php");