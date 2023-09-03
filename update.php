<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form edit data siswa</title>
</head>

<body>
  <?php
  include("koneksi.php");

  $id = $_GET["id"];
  $query = mysqli_query($koneksi, "SELECT * FROM siswa WHERE id='$id'");
  while ($data = mysqli_fetch_array($query)) {
    ?>
    <form action="act_update_siswa.php" method="POST">
      <input hidden type="text" name="id" value="<?php echo $data['id'] ?>">
      <label for="">nama siswa : </label>
      <input type="text" name="nama_siswa" value="<?php echo $data['nama_siswa'] ?>">
      <br><br>
      <label for="">jenis kelamin : </label>
      <input type="radio" name="jenis_kelamin" value="laki-laki" <?php echo ($data['jenis_kelamin'] == 'laki-laki' ? 'checked=checked' : ''); ?>>Laki-Laki
      <input type="radio" name="jenis_kelamin" value="perempuan" <?php echo ($data['jenis_kelamin'] == 'perempuan' ? 'checked=checked' : ''); ?>>Perempuan
      <br><br>
      <label for="">No Telepon : </label>
      <input type="tel" name="no_telp" value="<?php echo $data['no_telp'] ?>">
      <br><br>
      <button type="submit">UPDATE!</button>
    </form>
  <?php } ?>
  <br>
  <button onclick="window.location='table_siswa.php'">kembali</button>
</body>

</html>