<?php

function koneksi()
{
  return mysqli_connect("localhost", "root", "", "datasekolah");
}

function tambah($data)
{
  $koneksi = koneksi();

  $nis = $data["nisn"];
  $nama = $data["nama"];
  $tempatLahir = $data["tempat_lahir"];
  $tanggalLahir = $data["tanggal_lahir"];
  $gender = $data["gender"];
  $alumni = $data["alumni"];
  $alamat = $data["alamat"];
  $tempatTinggal = $data["tempat_tinggal"];
  $jurusan = $data["jurusan"];
  $ijazahSmp = $data["ijazah_smp"];
  $pasFoto = $data["pas_foto"];

  $query = "INSERT INTO siswa VALUES (null , '$nis', '$nama', '$tempatLahir', '$tanggalLahir',
   '$gender', '$alumni', '$alamat', '$tempatTinggal', '$jurusan' , '$pasFoto', '$ijazahSmp')";

  mysqli_query($koneksi, $query);

  return mysqli_affected_rows($koneksi);
}
