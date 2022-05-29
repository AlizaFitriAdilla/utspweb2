<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
date_default_timezone_set('Asia/Jakarta');
$tanggal = date("Y-m-d H:i:s");
$judul = $_POST['judul'];
$penulis = $_POST['penulis'];
$penerbit = $_POST['penerbit'];

 
// menginput data ke database
mysqli_query($koneksi,"insert into buku values('','$tanggal','$judul','$penulis','$penerbit')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>