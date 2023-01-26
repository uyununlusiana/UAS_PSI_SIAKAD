<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
	// melakukan pengalihan
	header("location:../login/login.php");
}
include "../config/koneksi.php";

$nim = $_POST['nim'];
$level = $_POST['level'];
$username = $_POST['username'];
$password = $_POST['password'];
$angkatan = $_POST['angkatan'];
$kurikulum_id = $_POST['kurikulum_id'];
$identitas = $_POST['identitas'];
$nama = $_POST['nama'];
$foto = $_POST['foto'];
$status_awal = $_POST['status_awal'];
$status_mhs = $_POST['status_mhs'];
$program_id = $_POST['program_id'];
$kode_jurusan = $_POST['kode_jurusan'];
$pembimbing_akademik = $_POST['pembimbing_akademik'];
$kelamin = $_POST['kelamin'];
$warga_negara = $_POST['warga_negara'];
$kebangsaan = $_POST['kebangsaan'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$agama = $_POST['agama'];
$status_sipil = $_POST['status_sipil'];
$alamat_asal = $_POST['alamat_asal'];
$kota_asal = $_POST['kota_asal'];
$RT_asal = $_POST['RT_asal'];
$RW_asal = $_POST['RW_asal'];
$kode_posAsal = $_POST['kode_posAsal'];
$propinsi_asal = $_POST['propinsi_asal'];
$negara_asal = $_POST['negara_asal'];
$nama_ayah = $_POST['nama_ayah'];
$agama_ayah = $_POST['agama_ayah'];
$pendidikan_ayah = $_POST['pendidikan_ayah'];
$pekerjaan_ayah = $_POST['pekerjaan_ayah'];
$hidup_ayah = $_POST['hidup_ayah'];
$nama_ibu = $_POST['nama_ibu'];
$agama_ibu = $_POST['agama_ibu'];
$pendidikan_ibu = $_POST['pendidikan_ibu'];
$pekerjaan_ibu = $_POST['pekerjaan_ibu'];
$hidup_ibu = $_POST['hidup_ibu'];
$alamat_ortu = $_POST['alamat_ortu'];
$kota_ortu = $_POST['kota_ortu'];
$kode_posOrtu = $_POST['kode_posOrtu'];
$propinsi_ortu = $_POST['propinsi_ortu'];
$negara_ortu = $_POST['negara_ortu'];
$telepon_ortu = $_POST['telepon_ortu'];
$handphone_ortu = $_POST['handphone_ortu'];
$email_ortu = $_POST['email_ortu'];
$asal_sekolah = $_POST['asal_sekolah'];
$asal_sekolah1 = $_POST['asal_sekolah1'];
$jenis_sekolah = $_POST['jenis_sekolah'];
$kota_sekolah = $_POST['kota_sekolah'];
$jurusan_sekolah = $_POST['jurusan_sekolah'];
$nilai_sekolah = $_POST['nilai_sekolah'];
$tahun_lulus = $_POST['tahun_lulus'];
$aktif = $_POST['aktif'];
$lulus_ujian = $_POST['lulus_ujian'];
$nilai_ujian = $_POST['nilai_ujian'];
$grade_nilai = $_POST['grade_nilai'];
$tanggal_lulus = $_POST['tanggal_lulus'];
$ipk = $_POST['ipk'];
$total_sks = $_POST['total_sks'];
$insert_data = mysqli_query($koneksi, "INSERT INTO mahasiswa (nim, level, username, password, angkatan, kurikulum_id, identitas, nama,  foto,status_awal,status_mhs, program_id, kode_jurusan, pembimbing_akademik, kelamin, warga_negara,kebangsaan,tempat_lahir, tanggal_lahir, agama ,status_sipil,alamat_asal,kota_asal,RT_asal,RW_asal,kode_posAsal,propinsi_asal,negara_asal,nama_ayah ,agama_ayah,pendidikan_ayah,pekerjaan_ayah,hidup_ayah, nama_ibu, agama_ibu,pendidikan_ibu,pekerjaan_ibu,hidup_ibu,alamat_ortu,kota_ortu,kode_posOrtu,propinsi_ortu,negara_ortu,telepon_ortu,handphone_ortu,email_ortu,asal_sekolah,asal_sekolah1,jenis_sekolah,kota_sekolah,jurusan_sekolah,nilai_sekolah,tahun_lulus,aktif,lulus_ujian,nilai_ujian,grade_nilai,tanggal_lulus,ipk,total_sks) VALUES ('$nim', '$level', '$username', '$password', '$angkatan','$kurikulum_id','$identitas','$nama','$foto','$status_awal','$status_mhs','$program_id','$kode_jurusan','$pembimbing_akademik','$kelamin','$warga_negara','$kebangsaan','$tempat_lahir','$tanggal_lahir','$agama','$status_sipil','$alamat_asal','$kota_asal','$RT_asal','$RW_asal','$kode_posAsal','$propinsi_asal','$negara_asal','$nama_ayah','$agama_ayah,'$pendidikan_ayah','$pekerjaan_ayah','$hidup_ayah','$nama_ibu','$agama_ibu','$pendidikan_ibu','$pekerjaan_ibu','$hidup_ibu','$alamat_ortu','$kota_ortu','$kode_posOrtu','$propinsi_ortu','$negara_ortu','$telepon_ortu','$handphone_ortu','$email_ortu','$asal_sekolah','$asal_sekolah1','$jenis_sekolah','$kota_sekolah','$jurusan_sekolah','$nilai_sekolah','$tahun_lulus','$aktif','$lulus_ujian','$nilai_ujian','$grade_nilai','$tanggal_lulus','$ipk','$total_sks')");


if ($insert_data) {
	header('location:mahasiswa.php?pesan=Data Berhasil Disimpan');
} else {
	echo mysqli_error($koneksi);
	//header('location:mahasiswa.php?pesan=Data Gagal Disimpan');

}

