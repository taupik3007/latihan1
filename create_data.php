<?php
include 'coba2.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$nilai = $_POST['nilai'];

$data = mysqli_query($koneksi,"INSERT INTO `coba`( `nama`, `kelas`, `nilai`) VALUES ('ujang','ti100','50')");

if($data == true){
    echo "berhasil";
}






?>