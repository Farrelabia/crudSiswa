<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form tambah data siswa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <style>
    .shadowBg {
      box-shadow: 0px 0px 20px -3px rgba(0, 0, 0, 1);
      -webkit-box-shadow: 0px 0px 20px -3px rgba(0, 0, 0, 1);
      -moz-box-shadow: 0px 0px 20px -3px rgba(0, 0, 0, 1);
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-dark bg-dark navbar-expand-lg p-3 mb-5 shadowBg">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Tambah Siswa</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <button onclick="window.location='table_siswa.php'" class="btn btn-outline-warning">kembali</button>
    </div>
  </nav>
  <div class="border border-dark mx-auto p-5 bg-dark text-white rounded-5" style="max-width: 600px">
    <form action="act_create.php" method="get">
      <div class="mb-2">
        <label for="" style="width: 150px">Nama Siswa </label>
        <input type="text" name="nama_siswa" class="w-50">
      </div>
      <div class="mb-2">
        <label for="" style="width: 150px">Jenis Kelamin </label>
        <input type="radio" name="jenis_kelamin" value="laki-laki" class="me-2">Laki-laki
        <input type="radio" name="jenis_kelamin" value="perempuan" class="mx-2">Perempuan
      </div>
      <div class="mb-2">
        <label for="" style="width: 150px">No Telepon </label>
        <input type="tel" name="no_telp" class="w-50">
      </div>
      <br>
      <button type="submit" class="btn btn-outline-light">Kirim!</button>
    </form>

  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"></script>
</body>

</html>