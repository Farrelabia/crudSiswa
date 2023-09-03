<?php
include('koneksi.php');
?>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <style>
    .shadowBg {
      box-shadow: 0px 0px 20px -3px rgba(0, 0, 0, 1);
      -webkit-box-shadow: 0px 0px 20px -3px rgba(0, 0, 0, 1);
      -moz-box-shadow: 0px 0px 20px -3px rgba(0, 0, 0, 1);
    }
  </style>
</head>

<body>
<nav class="navbar navbar-dark bg-dark navbar-expand-lg p-3 shadowBg fixed-top" >
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Table Siswa</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <button onclick="window.location='create.php'" class="btn btn-warning">tambah data</button>
  </div>
</nav>


  <table border="1" class="table table-dark table-striped container-sm" style="margin-top: 150px">
    <thead>
      <th class="text-center">No</th>
      <th>Nama</th>
      <th>Gender</th>
      <th>No.telp</th>
      <th class="text-center">Action</th>
    </thead>
    <tbody>
      <?php
      $no = 1;
      $query = mysqli_query($koneksi, "SELECT * FROM siswa");
      while ($data = mysqli_fetch_array($query)) {
        echo "<tr>
          <td class='text-center'>$no</td>
          <td>$data[nama_siswa]</td>
          <td>$data[jenis_kelamin]</td>
          <td>$data[no_telp]</td>
          <td class='text-center'>
          <a href='update.php?id=$data[id]' class='btn btn-primary me-3' >update</a>
          <a href='act_delete_siswa.php?id=$data[id]' class='btn btn-danger'>hapus</a>
          </td>

        </tr>";

        $no++;

      }
      ?>

    </tbody>
  </table>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>