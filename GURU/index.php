<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Crud</title>
  </head>
  <style>
      html,body{height: 100%;}
    
    body{
         background-image: url(../image/buat_index.jpg);
         opacity: 1;
         background-size: cover;
         background-position: center;
    }
  </style>
  <body>
        <div class="abal pb-3 pt-5">
        <center><h2>Guru</h2></center>
        </div>
        
        <div class="container" style="padding-left:7rem ; padding-right: 7rem;">
        <div class="card bg-info ml-5 mr-5">
            <div class="card-header ">
                <h3>Guru</h3>
                <center><a href="create.php" class="btn btn-primary">Tambah Data</a></center>
            </div>
            <div class="card-body">
                <table class="table table-striped " style="background-color: rgb(219, 143, 10);">
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">nip</th>
                        <th scope="col">nama</th>
                        <th scope="col">alamat</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        <?php
                            include'../database.php';
                            $guru =  new Guru();
                            $no = 1;
                            foreach ($guru->index() as $data){
                        ?>
                        <tr>
                        <th scope="row"><?php echo $no++ ?></th>
                        <td><?php echo $data['nip'] ?></td>
                        <td><?php echo $data['nama'] ?></td>
                        <td><?php echo $data['alamat'] ?></td>
                        <td>
                            <div>
                            <a href="show.php?no=<?php echo $data['no']; ?>" class="btn btn-warning">Show</a> ||
                            <a href="edit.php?no=<?php echo $data['no']; ?>" class="btn btn-success">Edit</a> ||
                            <form action="proses.php" method="post" class="d-inline">
                            <input type="hidden" name="no" value="<?php echo $data['no']; ?>">
                            <input type="hidden" name="aksi" value="delete">
                            <button type="submit" class="btn btn-danger" name="save" onclick="return confirm('Apakah Anda Yakin Mau menghapus data ini ?')">
                                Delete
                            </button>
                           </form>
                        </div>
                        </td>
                        </tr>
                      <?php
                            }
                        ?>
                    </tbody>
                </table>
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