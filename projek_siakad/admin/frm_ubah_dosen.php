<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
	// melakukan pengalihan
	header("location:../login/login.php");
}
include "../layout/header.php";
include "../config/koneksi.php";
$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM dosen where dosen_id=$id");
$rs = mysqli_fetch_assoc($query);
?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pd-2 mb-3 border-bottom">
	<hl class="h2">Form Data Dosen</h1>
	</div>

	<!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380">
</canvas> -->

	<!-- <h4>Data Jadwal Kegiatan</h4> -->
<div class="table-responsive">
		<form action="simpan_ubah_dosen.php" method="POST">
			<!-- <div class="col-6">
				<div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Dosen ID</label>
                <input type="text" name="dosen_id" class="form-control"placeholder="Dosen ID">
            </div> -->
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Level</label>
                <input type="text" name="level" value="<?=$rs['level']; ?>" class="form-control">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Username</label>
                <input type="text" name="username" value="<?=$rs['username']; ?>" class="form-control" >
            </div>
             <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Password</label>
                <input type="text" name="password" value="<?=$rs['password']; ?>"class="form-control" >
            </div>
                  
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">nidn</label>
                <input type="text" name="nidn"value="<?=$rs['nidn']; ?>" class="form-control" >
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Nama Lengkap</label>
                <input type="text" name="nama_lengkap" value="<?=$rs['nama_lengkap']; ?>"class="form-control" >
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">TempatLahir</label>
                <input type="text" name="tempat_lahir"value="<?=$rs['tempat_lahir']; ?>" class="form-control">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Tanggal Lahir</label>
                <input type="text" name="tanggal_lahir" value="<?=$rs['tanggal_lahir']; ?>" class="form-control" >
            </div>  
             <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">KTP</label>
                <input type="text" name="ktp" value="<?=$rs['ktp']; ?>" class="form-control" >
            </div> 
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Agama</label>
                <input type="text" name="agama" value="<?=$rs['agama']; ?>"class="form-control" >
            </div> 
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                <input type="text" name="alamat"  value="<?=$rs['alamat']; ?>" class="form-control" >
            </div> 
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Email</label>
                <input type="text" name="email" value="<?=$rs['email']; ?>" class="form-control" >
            </div> 
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Telepon</label>
                <input type="text" name="telepon" value="<?=$rs['telepon']; ?>" class="form-control" >
            </div> 
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Handphone</label>
                <input type="text" name="handphone" value="<?=$rs['handphone']; ?>" class="form-control" >
            </div> 
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Keterangan</label>
                <input type="text" name="keterangan" value="<?=$rs['keterangan']; ?>" class="form-control" >
            </div> 
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Kota</label>
                <input type="text" name="kota" value="<?=$rs['kota']; ?>" class="form-control" >
            </div> 
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Propinsi</label>
                <input type="text" name="propinsi"  value="<?=$rs['propinsi']; ?>" class="form-control" >
            </div> 
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Negara</label>
                <input type="text" name="negara" value="<?=$rs['negara']; ?>" class="form-control" >
            </div> 
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Homebase</label>
                <input type="text" name="homebase" value="<?=$rs['homebase']; ?>" class="form-control" >
            </div> 
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Jurusan</label>
                <input type="text" name="jurusan" value="<?=$rs['jurusan']; ?>" class="form-control" >
            </div> 
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Gelar</label>
                <input type="text" name="gelar" value="<?=$rs['gelar']; ?>" class="form-control" >
            </div> 
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Jenjang</label>
                <input type="text" name="jenjang" value="<?=$rs['jenjang']; ?>" class="form-control" >
            </div> 
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Keilmuan</label>
                <input type="text" name="keilmuan" value="<?=$rs['keilmuan']; ?>" class="form-control" >
            </div> 
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Jabatan</label>
                <input type="text" name="jabatan" value="<?=$rs['jabatan']; ?>" class="form-control" >
            </div> 
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Institusi Induk</label>
                <input type="text" name="institusi_induk" value="<?=$rs['institusi_induk']; ?>" class="form-control" >
            </div> 
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Tanggal Bekerja</label>
                <input type="text" name="tgl_bekerja" value="<?=$rs['tgl_bekerja']; ?>" class="form-control" >
            </div> 
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Status Dosen</label>
                <input type="text" name="status_dosen" value="<?=$rs['status_dosen']; ?>" class="form-control">
            </div> 
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Aktif</label>
                <input type="text" name="aktif" value="<?=$rs['aktif']; ?>" class="form-control" >
            </div> 
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Foto</label>
                <input type="text" name="foto" value="<?=$rs['foto']; ?>" class="form-control" >
            </div> 
				</div>
				<input type="hidden" value="<?= $id; ?>" name="dosen_id" id="">
				
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
