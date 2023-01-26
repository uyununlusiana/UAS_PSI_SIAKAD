<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
	// melakukan pengalihan
	header("location:../login/login.php");
}
include "../config/koneksi.php";

$program_id = $_POST['program_id'];
$nama_program = $_POST['nama_program'];
$identitas_id = $_POST['identitas_id']; 
$aktif = $_POST['aktif'];
$insert_data = mysqli_query($koneksi, "INSERT INTO program (`program_id`, 'nama_program',`identitas_id`,`aktif`) VALUES ('$program_id','$nama_program', '$identitas_id','$aktif')");


if ($insert_data) {
	header('location:program.php?pesan=Data Berhasil Disimpan');
} else {
	echo mysqli_error($koneksi);
	//header('location:program.php?pesan=Data Gagal Disimpan');

}

