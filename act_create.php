<?php
  include('koneksi.php');

  $nama_siswa = $_GET['nama_siswa'];
  $jenis_kelamin = $_GET['jenis_kelamin'];
  $no_telp = $_GET['no_telp'];

  $query = "INSERT INTO siswa(nama_siswa,jenis_kelamin,no_telp) VALUES('$nama_siswa','$jenis_kelamin','$no_telp')";
  $result = mysqli_query($koneksi,$query);

  if($result){
    echo "Data berhasil ditambahkan";
    header("Location:table_siswa.php");
  } else{
    echo "Data gagal ditambahkan";
  }
?>
