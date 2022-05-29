<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel = "stylesheet" type="text/css" href = "css/bootstrap.min.css">
        <title>Edit Buku - Aplikasi Toko Buku</title>
</head>
<body>
        <div class ="container">
        <h1 class="text-center">Aplikasi Toko Buku</h1>
        <hr />
	<br/>
	<a href="index.php" class ="btn btn-warning" name="bsimpan">KEMBALI</a>
	<br/>
	<br/>
        <div class="card mt-4">
        <div class="card-header bg-warning text-white">
	<h5>Edit Data Buku</h5>
        </div>
 
	<?php
	include 'koneksi.php';
        $no = 1;
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from buku where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
                <div class="card-body">
		<form method="post" action="update.php">
                <div class="form-group">
                    <!-- <label for="tanggal"></label><br> -->
                    <input type="hidden" name="id" value="<?php echo $d['id'] ?>">
                    <input type="hidden" id="tanggal" name="tanggal" value="<?php echo $d['tanggal'] ?>">
                <div class="form-group">
                    <label for="judul">Judul Buku:</label><br>
                    <input type="text" id="judul" name="judul" value="<?php echo $d['judul'] ?>"><br>
                    <div class="form-group">
                    <label for="penulis">Penulis :</label><br>
                    <input type="text" id="penulis" name="penulis" value="<?php echo $d['penulis'] ?>"><br>
                    <br>
                    <div class="form-group">
                    <label for="penerbit">Penerbit :</label><br>
                    <input type="text" id="penerbit" name="penerbit" value="<?php echo $d['penerbit'] ?>"><br>
                    <br>
                   
                    </div>
                    <input type="submit" value="Submit" class ="btn btn-info" name="bsimpan">
                </form> 
			<?php } ?>
<script type="text/javascrip" src ="bootstrap.min.js"></script>
<hr />
    <h6 class= "text-center">&copy Aliza Fitri Adilla-20090079</h6>
    <hr />
</body>
</html>