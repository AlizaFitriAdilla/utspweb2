<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
date_default_timezone_set('Asia/Jakarta');
$tanggal = date("Y-m-d H:i:s");
$judul = $_POST['judul'];
$penulis = $_POST['penulis'];
$penerbit = $_POST['penerbit'];

 
// update data ke database
mysqli_query($koneksi,"update buku set tanggal='$tanggal', judul='$judul', penulis='$penulis', penerbit='$penerbit' where id='$id'");

 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>