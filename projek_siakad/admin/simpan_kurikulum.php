<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
	// melakukan pengalihan
	header("location:../login/login.php");
}
include "../config/koneksi.php";

$kurikulum_id = $_POST['kurikulum_id'];
$kode = $_POST['kode'];
$nama = $_POST['nama'];
$jurusan_id = $_POST['jurusan_id'];
$sesi = $_POST['sesi'];
$jml_sesi = $_POST['jml_sesi'];
$aktif = $_POST['aktif'];


$insert_data = mysqli_query($koneksi, "INSERT INTO kurikulum (kurikulum_id, kode, nama, jurusan_id, sesi,jml_sesi,aktif) VALUES ('$kurikulum_id', '$kode', '$nama', '$jurusan_id',$sesi','$jml_sesi','$aktif')");


if ($insert_data) {
	header('location:kurikulum.php?pesan=Data Berhasil Disimpan');
} else {
	echo mysqli_error($koneksi);
	//header('location:kurikulum.php?pesan=Data Gagal Disimpan');

}

