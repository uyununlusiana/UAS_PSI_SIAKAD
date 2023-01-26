<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
	// melakukan pengalihan
	header("location:../login/login.php");
}
include "../config/koneksi.php";

$nilai_id = $_POST['nilai_id'];
$identitas_id = $_POST['identitas_id'];
$kode_jurusan = $_POST['kode_jurusan'];
$grade = $_POST['grade'];
$bobot = $_POST['bobot'];
$nilai_min = $_POST['nilai_min'];
$nilai_mak = $_POST['nilai_mak'];
$keterangan = $_POST['keterangan']; 
$aktif = $_POST['aktif'];


$insert_data = mysqli_query($koneksi, "INSERT INTO nilai (`nilai_id`, `identitas_id`,'kode_jurusan', `grade`,`bobot`,`nilai_min`,  `nilai_mak`,`keterangan`, `aktif`) VALUES ('$nilai_id', '$identitas_id', '$kode_jurusan','$grade','$bobot','$nilai_min','$nilai_mak','$keterangan','$aktif')");


if ($insert_data) {
	header('location:nilai.php?pesan=Data Berhasil Disimpan');
} else {
	echo mysqli_error($koneksi);
	//header('location:nilai.php?pesan=Data Gagal Disimpan');

}

