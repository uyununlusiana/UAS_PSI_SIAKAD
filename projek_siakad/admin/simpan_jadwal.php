<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
	// melakukan pengalihan
	header("location:../login/login.php");
}
include "../config/koneksi.php";

$jadwal_id = $_POST['jadwal_id'];
$kalender_id = $_POST['kalender_id'];
$identitas_id = $_POST['identitas_id'];
$program_id = $_POST['program_id'];
$matakuliah_id = $_POST['matakuliah_id'];
$kode_jurusan = $_POST['kode_jurusan'];
$ruang = $_POST['ruang'];
$kelas = $_POST['kelas'];
$dosen_id = $_POST['dosen_id']; 
$hari = $_POST['hari'];
$jam_mulai = $_POST['jam_mulai'];
$jam_selesai = $_POST['jam_selesai'];

$insert_data = mysqli_query($koneksi, "INSERT INTO jadwal (jadwal_id, kalender_id, identitas_id, program_id, matakuliah_id,kode_jurusan,ruang,kelas,dosen_id,hari,jam_mulai,jam_selesai) VALUES ('$jadwal_id', '$kalender_id', '$identitas_id','$program_id','$jadwal_id','$kalender_id','$identitas_id','$program_id','$matakuliah_id','$kode_jurusan','$ruang','$kelas','$dosen_id','$hari','$jam_mulai','$jam_selesai')");

if ($insert_data) {
	header('location:jadwal.php?pesan=Data Berhasil Disimpan');
} else {
	echo mysqli_error($koneksi);
	//header('location:jadwal.php?pesan=Data Gagal Disimpan');

}

