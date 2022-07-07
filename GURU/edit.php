<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <style>
      html,body{height: 100%;}
    
    body{
         background-image: url(../image/buat_edit.jpg);
         opacity: 1;
         background-size: cover;
         background-position: center;
    }
  </style>
  <body>
        <div class="abal pb-3 pt-5">
            <center><h2 style = "color:white;">Guru</h2></center>
            </div>
        <!-- CARDs -->
        <div class="container " style="padding-left:17rem ; padding-right: 17rem;">
        <div class="card bg-info ml-5 mr-5">
            <div class="card-header">
                Edit Guru
            </div>
            <div class="card-body">
            <?php
                include '../database.php';
                $guru = new Guru();
                foreach ($guru->edit($_GET['no']) as $data) {
                    $no = $data['no'];
                    $nip = $data['nip'];
                    $nama = $data['nama'];
                    $alamat = $data['alamat'];
                    
                }
            ?>
            <form action="../guru/proses.php" method="post">
                <input type="hidden" name="aksi" value="update">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <div class="form-group">
                        <label for="exampleInputEmail1">nip</label> 
                        <input type="text" class="form-control" name="nip" value="<?php echo $nip; ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">nama</label>
                        <input type="text" class="form-control" name="nama" value="<?php echo $nama; ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">alamat</label>
                        <input type="text" class="form-control" name="alamat" value="<?php echo $alamat; ?>">
                    </div>
                    <button type="submit" name="save" class="btn btn-primary">Simpan</button>
                    <a href="index.php"><button type="submit" name="save" class="btn btn-primary">Kembali</button></a>
                </form>
                    
            
            </div>
        </div>
        </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    
  </body>
</html>