<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
	// melakukan pengalihan
	header("location:../login/login.php");
}
include "../layout/header.php";
include "../config/koneksi.php";

?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pd-2 mb-3 border-bottom">
	<hl class="h2">Form Data Mahasiswa</h1>

	</div>
	
	<!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380">
</canvas> -->

	<!-- <h4>Data Jadwal Kegiatan</h4> -->
	<div class="table-responsive">
		<form action="simpan_mhs.php" method="POST">
			<div class="col-6">
			<div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">NIM</label>
                <input type="text" name="nim" class="form-control"placeholder="NIM">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Level</label>
                <input type="text" name="level" class="form-control"placeholder="Level">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Username</label>
                <input type="text" name="username" class="form-control" placeholder="Username">
            </div>
             <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Password</label>
                <input type="text" name="password" class="form-control" placeholder="Password">
            </div>
                  
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Angkatan</label>
                <input type="text" name="angkatan" class="form-control" placeholder="Angkatan">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Kurikulum_id</label>
                <input type="text" name="kurikulum_id" class="form-control" placeholder="Kurikulum_id">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Identitas</label>
                <input type="text" name="identitas" class="form-control" placeholder="Identitas">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" placeholder="Nama">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Foto</label>
                <input type="text" name="foto" class="form-control" placeholder="Foto">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Status Awal</label>
                <input type="text" name="status_awal" class="form-control" placeholder="Status Awal">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Status Mahasiswa</label>
                <input type="text" name="status_mhs<" class="form-control" placeholder="Status Mahasiswa">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">ID Program</label>
                <input type="text" name="program_id" class="form-control" placeholder="ID Program">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Kode Jurusan</label>
                <input type="text" name="kode_jurusan" class="form-control" placeholder="Kode Jurusan">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Pembimbing Akademik</label>
                <input type="text" name="pembimbing_akademik" class="form-control" placeholder="Pembimbing Akademik">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Kelamin</label>
                <input type="text" name="kelamin" class="form-control" placeholder="Kelamin">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Warga Negara</label>
                <input type="text" name="warga_negara" class="form-control" placeholder="Warga Negara">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Kebangsaan</label>
                <input type="text" name="kebangsaan" class="form-control" placeholder="Kebangsaan">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">TempatLahir</label>
                <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Tanggal Lahir</label>
                <input type="text" name="tanggal_lahir" class="form-control" placeholder="Tanggal Lahir">
            </div>  
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Agama</label>
                <input type="text" name="agama" class="form-control" placeholder="Agama">
            </div> 
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Status Sipil</label>
                <input type="text" name="status_sipil" class="form-control" placeholder="Status Sipil">
            </div> 
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                <input type="text" name="pekerjaan_ayah" class="form-control" placeholder="Alamat">
            </div> 
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">kota</label>
                <input type="text" name="kota_asal" class="form-control" placeholder="Kota">
            </div> 
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">RT</label>
                <input type="text" name="RT_asal" class="form-control" placeholder="RT">
            </div> 
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">RW</label>
                <input type="text" name="RW_asal" class="form-control" placeholder="RW">
            </div> 
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Kode Pos</label>
                <input type="text" name="kode_posAsal" class="form-control" placeholder="Kode Pos">
            </div> 
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Propinsi</label>
                <input type="text" name="propinsi_asal" class="form-control" placeholder="Propinsi">
            </div> 
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Negara</label>
                <input type="text" name="negara_asal" class="form-control" placeholder="Negara">
            </div> 
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Nama Ayah</label>
                <input type="text" name="nama_ayah" class="form-control" placeholder="Nama Ayah">
            </div> 
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Agama Ayah</label>
                <input type="text" name="agama_ayah" class="form-control" placeholder="Agama Ayah">
            </div> 
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Pendidikan Ayah</label>
                <input type="text" name="pendidikan_ayah" class="form-control" placeholder="Pendidikan Ayah">
            </div> 
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Pekerjaan Ayah</label>
                <input type="text" name="pekerjaan_ayah" class="form-control" placeholder="Pekerjaan Ayah">
            </div> 
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Hidup Ayah</label>
                <input type="text" name="hidup_ayah" class="form-control" placeholder="Hidup Ayah">
            </div> 
            <div class="mb-3"> 
                <label for="exampleFormControlTextarea1" class="form-label">Nama Ibu</label>
                <input type="text" name="nama_ibu" class="form-control" placeholder="Nama Ibu">
            </div> 
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Agama Ibu</label>
                <input type="text" name="agama_ibu" class="form-control" placeholder="Agama Ibu">
            </div> 
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Pendidikan Ibu</label>
                <input type="text" name="pendidikan_ibu" class="form-control" placeholder="Pendidikan Ibu">
            </div> 
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Pekerjaan Ibu</label>
                <input type="text" name="pekerjaan_ibu" class="form-control" placeholder="Pekerjaan Ibu">
            </div> 
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Hidup Ibu</label>
                <input type="text" name="hidup_ibu" class="form-control" placeholder="Hidup Ibu">
            </div> 
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Alamat Orang Tua</label>
                <input type="text" name="alamat_ortu" class="form-control" placeholder="Alamat Orang Tua">
            </div> 
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Kota Ortu</label>
                <input type="text" name="kota_ortu" class="form-control" placeholder="Kota Ortu">
            </div> 
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Kode Pos Ortu</label>
                <input type="text" name="kode_posOrtu" class="form-control" placeholder="Kode Pos Ortu">
            </div> 
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Provinsi Ortu</label>
                <input type="text" name="propinsi_ortu" class="form-control" placeholder="Provinsi Ortu">
            </div> 
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Negara Ortu</label>
                <input type="text" name="negara_ortu" class="form-control" placeholder="Negara Ortu">
            </div> 
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Tlp Ortu</label>
                <input type="text" name="telepon_ortu" class="form-control" placeholder="Tlp Ortu">
            </div> 
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Hp Ortu</label>
                <input type="text" name="handphone_ortu" class="form-control" placeholder="Hp Ortu">
            </div> 
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Email Ortu</label>
                <input type="text" name="email_ortu" class="form-control" placeholder="Email Ortu">
            </div> 
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Asal Sekolah</label>
                <input type="text" name="asal_sekolah" class="form-control" placeholder="Asal Sekolah">
            </div> 
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Asal Sekolah1</label>
                <input type="text" name="asal_sekolah1" class="form-control" placeholder="Asal Sekolah1">
            </div> 
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Jenis Sekolah</label>
                <input type="text" name="jenis_sekolah" class="form-control" placeholder="Jenis Sekolah">
            </div> 
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Kota Sekolah</label>
                <input type="text" name="kota_sekolah" class="form-control" placeholder="Kota Sekolah">
            </div> 
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Jurusan Sekolah</label>
                <input type="text" name="jurusan_sekolah" class="form-control" placeholder="Jurusan Sekolah">
            </div> 
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Nilai Sekolah</label>
                <input type="text" name="nilai_sekolah" class="form-control" placeholder="Nilai Sekolah">
            </div> 
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Tahun Lulus</label>
                <input type="text" name="tahun_lulus" class="form-control" placeholder="Tahun Lulus">
            </div> 
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Aktif</label>
                <input type="text" name="aktif" class="form-control" placeholder="Aktif">
            </div> 
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Lulus Ujian</label>
                <input type="text" name="lulus_ujian" class="form-control" placeholder="Lulus Ujian">
            </div> 
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Nilai Ujian</label>
                <input type="text" name="nilai_ujian" class="form-control" placeholder="Nilai Ujian">
            </div> 
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Grade Nilai</label>
                <input type="text" name="grade_nilai" class="form-control" placeholder="Grade Nilai">
            </div> 
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Tanggal Lulus</label>
                <input type="text" name="tanggal_lulus" class="form-control" placeholder="Tanggal Lulus">
            </div> 
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Ipk</label>
                <input type="text" name="ipk" class="form-control" placeholder="Ipk">
            </div>  <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Total SKS</label>
                <input type="text" name="total_sks" class="form-control" placeholder="Total SKS">
            </div> 
            
				</div>

			<div class="mb-3">
				<button type="submit" class="btn btn-sm btn-primary">Simpan</button>
			</div>
		</div>
		</form>
	</div>
</main>
<?php
include "../layout/footer.php";
?>