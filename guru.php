<?php

class Guru extends Database 
{
    public function index()
    {
        $dataguru = mysqli_query($this->koneksi, "select * from guru");

        return $dataguru;
    }

    public function create($nip,$nama,$alamat)
    {
        mysqli_query($this->koneksi,
                     "insert into guru values (null,'$nip','$nama','$alamat')"
                    );
    }

    public function edit($id)
    {
        $dataguru = mysqli_query($this->koneksi,
                     "select * from guru where no = '$no'");
                    
        return $dataguru;             
    }

    public function update($no,$nip,$nama,$alamat)
    {
        mysqli_query(
            $this->koneksi,
            "update guru set nip = '$nip',nama ='$nama' ,alamat = '$alamat' where no = '$no'"
        );
    }

    // menampilkan data guru berdasarkan id 
    public function show($no){
        
        $dataguru = mysqli_query($this->koneksi,
                    "select * from guru where no = '$no'");

        return $dataguru;            

    }
    
    // menghapus data guru
    public function delete($no)
    {
        mysqli_query($this->koneksi,
        "delete from guru where no = '$no'");
    }
}

