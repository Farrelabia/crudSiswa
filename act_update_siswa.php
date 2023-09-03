<?php
  include("koneksi.php");

  $id = $_POST ['id'];
  $nama = $_POST ['nama_siswa'];
  $gender = $_POST ['jenis_kelamin'];
  $no = $_POST ['no_telp'];

  $update = mysqli_query($koneksi, "UPDATE siswa SET nama_siswa='$nama', jenis_kelamin='$gender', no_telp='$no' WHERE id = '$id'");

  
  if($update){
    echo "Data berhasil diupdate";
    header("Location:table_siswa.php");
  } else{
    echo "Data gagal diupdate";
  }
?>