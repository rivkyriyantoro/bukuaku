<?php

$koneksi = mysqli_connect("localhost","root","","bukuaku");


if(mysqli_connect_error()){
    echo "koneksi database gagal : " . mysqli_connect_error();
}