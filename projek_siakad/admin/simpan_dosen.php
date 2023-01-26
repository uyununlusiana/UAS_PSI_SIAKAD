<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
	// melakukan pengalihan
	header("location:../login/login.php");
}
include "../config/koneksi.php";

$dosen_id = $_POST['dosen_id'];
$level = $_POST['level'];
$username = $_POST['username'];
$password = $_POST['password'];
$nidn = $_POST['nidn'];
$nama_lengkap = $_POST['nama_lengkap'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$ktp = $_POST['ktp'];
$agama = $_POST['agama'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$telepon = $_POST['telepon'];
$handphone = $_POST['handphone'];
$keterangan = $_POST['keterangan'];
$kota = $_POST['kota'];
$propinsi = $_POST['propinsi'];
$negara = $_POST['negara'];
$homebase = $_POST['homebase'];
$jurusan = $_POST['jurusan'];
$gelar = $_POST['gelar'];
$jenjang = $_POST['jenjang'];
$keilmuan = $_POST['keilmuan'];
$jabatan = $_POST['jabatan'];
$institusi_induk = $_POST['institusi_induk'];
$tgl_bekerja = $_POST['tgl_bekerja'];
$status_dosen = $_POST['status_dosen'];
$aktif = $_POST['aktif'];
$foto = $_POST['foto'];

$insert_data = mysqli_query($koneksi, "INSERT INTO dosen (`dosen_id`, `level`, `username`, `password`,`nidn`,`nama_lengkap`,`tempat_lahir`,  `tanggal_lahir`,`ktp`, `agama`,`alamat`, `email`,`telepon`,`handphone`,`keterangan`, `kota`,`propinsi`,`negara`,`homebase`,`jurusan`,`gelar`,`jenjang`,`keilmuan`,`jabatan`,`institusi_induk`,`tgl_bekerja`,`status_dosen`,`aktif`,`foto`) VALUES ('$dosen_id', '$level', '$username', '$password','$nidn','$nama_lengkap','$tempat_lahir','$tanggal_lahir','$ktp','$agama','$alamat','$email','$telepon','$handphone','$keterangan','$kota','$propinsi','$negara','$homebase','$jurusan','$gelar','$jenjang','$keilmuan','$jabatan','$institusi_induk','$tgl_bekerja','$status_dosen','$aktif','$foto')");


if ($insert_data) {
	header('location:dosen.php?pesan=Data Berhasil Disimpan');
} else {
	echo mysqli_error($koneksi);
	//header('location:dosen.php?pesan=Data Gagal Disimpan');

}

