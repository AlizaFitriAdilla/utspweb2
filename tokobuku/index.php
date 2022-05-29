<!DOCTYPE html>
<html lang="en">
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel = "stylesheet" type="text/css" href = "css/bootstrap.min.css">

        <style type="text/css">
	body {background: #000000 url('image/sk.jpg') no-repeat center top;
    font-family: sans-serif;
	
    }
	</style>

        <title>Aplikasi Toko Buku</title>
    </head>
   
    <body >
  
        <div class ="container">
        <h1 class = "text-center" >Aplikasi Toko Buku</h1>
        <hr />
        <div class="card mt-4">
        <div class="card-header bg-warning text-white">
        <h5>Berikut Daftar Buku</h5>
        </div>

        <div class="card-body" >
        <table class = "table table-bordered table-striped" border="1">
            <thead>
                <tr>
                    <th class = "text-center">No </th>
                    <th class = "text-center">Tanggal </th>
                    <th class = "text-center">judul buku</th>
                    <th class = "text-center">Penulis</th>
                    <th class = "text-center">penerbit</th>
                    <th class = "text-center">Opsi</th>
                </tr>
            </thead>
            <?php 
		    include 'koneksi.php';
		    $no = 1;
		    $data = mysqli_query($koneksi,"select * from buku");
		    while($d = mysqli_fetch_array($data)){
		    	?>
		    	<tr>
		    		<td><?php echo $no++; ?></td>
		    		<td><?php echo $d['tanggal']; ?></td>
		    		<td><?php echo $d['judul']; ?></td>
		    		<td><?php echo $d['penulis']; ?></td>
                    <td><?php echo $d['penerbit']; ?></td>
		    		
		    		<td>
                        <a href="edit.php?id=<?php echo $d ["id"]; ?>" class= "btn-info">EDIT</a>
		    			<a href="hapus.php?id=<?php echo $d['id']; ?>" class= "btn-warning">HAPUS</a>
		    		</td>
			    </tr>
			<?php 
		}
		?>
        </table>
        <p>Beli buku baru?</p>
        <a href="tambah.php"><button id="tambah" class ="btn btn-warning" name="bsimpan">Beli Buku</button></a>
    <br>
    <br>
    <hr />
    <h6 class ="text-center">&copy Aliza Fitri Adilla-20090079</h6>
    <hr />
    </body>
</html>