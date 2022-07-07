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
         background-image: url(../image/4k-wallpaper-14.jpg);
         opacity: 1;
         background-size: cover;
         background-position: center;
    }
  </style>
  <body>
        <div class="abal pb-3 pt-5">
            <center><h2 style="color: white;">Guru</h2></center>
        </div>
        <div class="container">
        <div class="card bg-info " style = "margin-left: 19rem; margin-right: 19rem;">
            <div class="card-header bg-dark ">
                <h5 style="color: grey;">guru</h5>
            </div>
            <div class="card-body">
            <?php
                include '../database.php';
                $guru = new Guru();
                foreach ($guru->edit($_GET['no']) as $data) {
                    $nip = $data['nip'];
                    $nama = $data['nama'];
                    $alamat = $data['alamat'];
                }
            ?>
            <form action="" method="">
                <input type="hidden" name="aksi" value="update">
                <input type="hidden" name="no" value="<?php echo $no; ?>">
                    <div class="form-group bg-warning text-sm-center">
                        <label for="exampleInputEmail1 bg-light"><h5>nip</h5></label> 
                        <input type="text" class="form-control" name="nip" value="<?php echo $nip; ?>" disabled>
                    </div>
                    <div class="form-group bg-warning text-sm-center">
                        <label for="exampleInputEmail1 bg-light"><h5>nama</h5></label>
                        <input type="text" class="form-control" name="nama" value="<?php echo $nama; ?>" disabled>
                    </div>
                    <div class="form-group bg-warning text-sm-center">
                        <label for="exampleInputEmail1 bg-light"><h5>alamat</h5></label>
                        <input type="text" class="form-control" name="alamat" value="<?php echo $alamat; ?>" disabled>
                    </div>
                </form>
                    <div class="form-group">
                        <a href="index.php"><button class="btn-btn-light">Kembali</button></a>
                   </div>

            </div>
        </div>
        </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>