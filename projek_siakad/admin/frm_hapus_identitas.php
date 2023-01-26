<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
	// melakukan pengalihan
	header("location:../login/login.php");
}
include "../config/koneksi.php";
$id= $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM identitas where identitas_id=$id"); 

if ($query) {
	header('location:identitas.php?pesan=Data Berhasil Di Hapus');
} else {
	header('location:identitas.php?pesan=Data Gagal Di Hapus');

}