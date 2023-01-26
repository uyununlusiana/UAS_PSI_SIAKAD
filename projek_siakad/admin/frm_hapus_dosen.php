<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
	// melakukan pengalihan
	header("location:../login/login.php");
}
include "../config/koneksi.php";
$id= $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM dosen where dosen_id=$id"); 

if ($query) {
	header('location:dosen.php?pesan=Data Berhasil Di Hapus');
} else {
	header('location:dosen.php?pesan=Data Gagal Di Hapus');

}