<?php
  include("koneksi.php");

  $id = $_GET ["id"];
  $hapus = mysqli_query($koneksi, "DELETE FROM siswa WHERE id='$id'");

  if ($hapus) {
    echo "<script>alert('berhasil hapus')</script>";
    header("refresh:0;table_siswa.php");
  } else {
    echo "<script>alert('gagal hapus')</script>";
    header("refresh:0;table_siswa.php");
  }
?>