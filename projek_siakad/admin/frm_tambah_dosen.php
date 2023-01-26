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
	<hl class="h2">Form Data Dosen</h1>

	</div>
	
	<!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380">
</canvas> -->

	<!-- <h4>Data Jadwal Kegiatan</h4> -->
	<div class="table-responsive">
		<form action="simpan_dosen.php" method="POST">
			<div class="col-6">
			<div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Dosen ID</label>
                <input type="text" name="dosen_id" class="form-control"placeholder="Dosen ID">
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
                <label for="exampleFormControlTextarea1" class="form-label">nidn</label>
                <input type="text" name="nidn" class="form-control" placeholder="nidn">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Nama Lengkap</label>
                <input type="text" name="nama_lengkap" class="form-control" placeholder="Nama Lengkap">
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
                <label for="exampleFormControlTextarea1" class="form-label">KTP</label>
                <input type="text" name="ktp" class="form-control" placeholder="KTP">
            </div> 
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Agama</label>
                <input type="text" name="agama" class="form-control" placeholder="Agama">
            </div> 
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                <input type="text" name="alamat" class="form-control" placeholder="Alamat">
            </div> 
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Email</label>
                <input type="text" name="email" class="form-control" placeholder="Email">
            </div> 
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Telepon</label>
                <input type="text" name="telepon" class="form-control" placeholder="Telepon">
            </div> 
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Handphone</label>
                <input type="text" name="handphone" class="form-control" placeholder="Handphone">
            </div> 
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Keterangan</label>
                <input type="text" name="keterangan" class="form-control" placeholder="Keterangan">
            </div> 
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Kota</label>
                <input type="text" name="kota" class="form-control" placeholder="Kota">
            </div> 
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Propinsi</label>
                <input type="text" name="propinsi" class="form-control" placeholder="Propinsi">
            </div> 
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Negara</label>
                <input type="text" name="negara" class="form-control" placeholder="Negarah">
            </div> 
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Homebase</label>
                <input type="text" name="homebase" class="form-control" placeholder="Homebase">
            </div> 
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Jurusan</label>
                <input type="text" name="jurusan" class="form-control" placeholder="Jurusan">
            </div> 
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Gelar</label>
                <input type="text" name="gelar" class="form-control" placeholder="Gelar">
            </div> 
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Jenjang</label>
                <input type="text" name="jenjang" class="form-control" placeholder="Jenjang">
            </div> 
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Keilmuan</label>
                <input type="text" name="keilmuan" class="form-control" placeholder="Keilmuan">
            </div> 
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Jabatan</label>
                <input type="text" name="jabatan" class="form-control" placeholder="Jabatan">
            </div> 
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Institusi Induk</label>
                <input type="text" name="institusi_induk" class="form-control" placeholder="Institusi Induk">
            </div> 
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Tanggal Bekerja</label>
                <input type="text" name="tgl_bekerja" class="form-control" placeholder="Tanggal Bekerja">
            </div> 
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Status Dosen</label>
                <input type="text" name="status_dosen" class="form-control" placeholder="Status Dosen">
            </div> 
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Aktif</label>
                <input type="text" name="aktif" class="form-control" placeholder="Aktif">
            </div> 
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Foto</label>
                <input type="text" name="foto" class="form-control" placeholder="Foto">
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