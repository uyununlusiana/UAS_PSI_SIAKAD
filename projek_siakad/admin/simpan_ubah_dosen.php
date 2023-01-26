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

$update_data = mysqli_query($koneksi, "UPDATE dosen set username='$username', password='$password',nidn='$nidn', nama_lengkap='$nama_lengkap',tempat_lahir='$tempat_lahir',tanggal_lahir='$tanggal_lahir',ktp='$ktp', agama='$agama',alamat='$alamat', email='$email',telepon='$telepon',handphone='$handphone',keterangan='$keterangan', kota='$kota',propinsi='$propinsi',negara='$negara',homebase='$homebase',jurusan='$jurusan',gelar='$gelar',jenjang='$jenjang',keilmuan='$keilmuan',jabatan='$jabatan',institusi_induk='$institusi_induk',tgl_bekerja='$tgl_bekerja',status_dosen='$status_dosen',aktif='$aktif',foto='$foto' where dosen_id='$dosen_id'");

if ($update_data) {
	header('location:dosen.php?pesan=Data Berhasil Diubah');
} else {
	echo mysqli_error($koneksi);
	//header('location:dosen.php?pesan=Data Gagal Diubah');

}

