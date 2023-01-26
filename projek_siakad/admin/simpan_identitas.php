<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
	// melakukan pengalihan
	header("location:../login/login.php");
}
include "../config/koneksi.php";

$identitas_id = $_POST['identitas_id'];
$kode_hukum = $_POST['kode_hukum'];
$nama_identitas = $_POST['nama_identitas'];
$tgl_mulai = $_POST['tgl_mulai'];
$alamat = $_POST['alamat'];
$kota = $_POST['kota'];
$kode_pos = $_POST['kode_pos'];
$telepon = $_POST['telepon'];
$fax = $_POST['fax'];
$email = $_POST['email'];
$website = $_POST['website'];
$no_akta = $_POST['no_akta'];
$tgl_akta = $_POST['tgl_akta'];
$no_sah = $_POST['no_sah'];
$tgl_sah = $_POST['tgl_sah'];
$aktif = $_POST['aktif'];


$insert_data = mysqli_query($koneksi, "INSERT INTO identitas (identitas_id, kode_hukum, nama_identitas, tgl_mulai,
alamat,kota,kode_pos,telepon,fax,email,website,no_akta,tgl_akta,no_sah,tgl_sah,aktif) VALUES ('$identitas_id', '$kode_hukum', '$nama_identitas', '$tgl_mulai',
'$alamat ','$kota','$kode_pos','$telepon','$fax','$email','$website','$no_akta', '$tgl_akta','$no_sah','$tgl_sah','$aktif')");


if ($insert_data) {
	header('location:identitas.php?pesan=Data Berhasil Disimpan');
} else {
	echo mysqli_error($koneksi);
	//header('location:identitas.php?pesan=Data Gagal Disimpan');

}

