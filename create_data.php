<?php
include 'coba2.php';

$nama = "ujang";
$kelas = "kelas";
$nilai = "50";

$data = mysqli_query($koneksi,"INSERT INTO `coba`( `nama`, `kelas`, `nilai`) VALUES ('$nama','$kelas','$nilai')");

if($data == true){
    echo "berhasil";
}






?>