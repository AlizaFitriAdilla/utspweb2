<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel = "stylesheet" type="text/css" href = "css/bootstrap.min.css">
    
        <title>Beli Buku - Aplikasi Toko Buku</title>
    </head>
    <body>
        <div class ="container">
        <h1 class = "text-center">Aplikasi Toko Buku</h1>
        <hr />
        <div class="card mt-4">
        <div class="card-header bg-warning text-white">
        <h5>Beli Buku</h5>
        </div>

        <div class="card-body">
        <p>Isi semua yang diperlukan dibawah!</p>
        <form method="post" action="tambah_aksi.php">
            <!-- <div class="form-group">
            <label for="tanggal">Tanggal Surat :</label><br>
            <input type="date" id="tanggal" name="tanggal"><br>
            <br> -->
            <div class="form-group">
            <label for="judul">Judul :</label><br>
            <input type="text" id="judul" name="judul"><br>
            <div class="form-group">
            <label for="penulis">Penulis :</label><br>
            <input type="text" id="penulis" name="penulis"><br>
            <br>
            <div class="form-group">
            <label for="penerbit">Penerbit :</label><br>
            <input type="text" id="penerbit" name="penerbit"><br>
            <br>
            
            </div>
            <input type="submit" value="Submit" class ="btn btn-info" name="bsimpan">
        </form> 
        <br>
        <a href="index.php">Kembali Ke Halaman Utama</a>
        <script type="text/javascrip" src ="bootstrap.min.js"></script>
        <hr />
    <h6 class = "text-center">&copy Aliza Fitri Adilla-20090079</h6>
    <hr />
    </body>
</html>