<?php

require "functions.php";

if (isset($_POST["kirim"])) {
  if (tambah($_POST) == 1) {
    echo "berhasil";
  } else {
    echo "gagal";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Siwa</title>
  <style>
    label,
    button {
      display: block;
    }

    form {
      margin: 0 auto;
      width: 500px;
    }
  </style>
</head>

<body>

  <h1>Masukan Data siswa</h1>

  <form action="" method="post">
    <label for="nisn">Nisn</label>
    <input type="number" name="nisn" id="nisn">
    <label for="nama">Nama</label>
    <input type="text" name="nama" id="nama">
    <label for="tempat_lahir">Tempat Lahir</label>
    <input type="text" name="tempat_lahir" id="tempat_lahir">
    <label for="tanggal_lahir">Tanggal Lahir</label>
    <input type="date" name="tanggal_lahir" id="tanggal_lahir">
    <label for="gender">Jenis Kelamin</label>
    <input type="text" name="gender" id="gender">
    <label for="alumni">Alumni</label>
    <input type="text" name="alumni" id="alumni">
    <label for="alamat">Alamat</label>
    <input type="text" name="alamat" id="alamat">
    <label for="tempat_tinggal">Tempat Tinggal</label>
    <input type="text" name="tempat_tinggal" id="tempat_tinggal">
    <label for="jurusan">Jurusan</label>
    <input type="text" name="jurusan" id="jurusan">
    <label for="pas_foto">Pas Foto</label>
    <input type="text" name="pas_foto" id="pas_foto">
    <label for="ijazah_smp"> Ijazah SMP</label>
    <input type="text" name="ijazah_smp" id="ijazah_smp">
    <button type="submit" name="kirim">Kirim</button>
  </form>

</body>

</html>