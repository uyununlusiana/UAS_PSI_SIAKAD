<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
	// melakukan pengalihan
	header("location:../login/login.php");
}
include "../layout/header.php";
include "../config/koneksi.php";
$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM jadwal where jadwal_id=$id");
$rs = mysqli_fetch_assoc($query);
?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pd-2 mb-3 border-bottom">
	<hl class="h2">Form Jadwal</h1>
	</div>

	<!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380">
</canvas> -->

	<!-- <h4>Data Jadwal Kegiatan</h4> -->
<div class="table-responsive">
		<form action="simpan_ubah_jadwal.php" method="POST">
			<div class="col-6">
            <div class="mb-3">
					<label for="exampleFormControlInput1" class="form-label">kalender_id</label>
					<input type="text" name="kalender_id" value="<?=$rs['kalender_id']; ?>" class="form-control">
				</div>
				<div class="mb-3">
					<label for="exampleFormControlInput1" class="form-label">identitas_id</label>
					<input type="text" name="identitas_id" value="<?=$rs['identitas_id']; ?>" class="form-control">
				</div>
				<div class="mb-3">
					<label for="exampleFormControlInput1" class="form-label">program_id</label>
					<input type="text" name="program_id" value="<?=$rs['program_id']; ?>" class="form-control">
				</div>
				<div class="mb-3">
					<label for="exampleFormControlInput1" class="form-label">matakuliah_id</label>
					<input type="text" name="matakuliah_id" value="<?=$rs['matakuliah_id']; ?>" class="form-control">
				</div>
				<div class="mb-3">
					<label for="exampleFormControlInput1" class="form-label">kode_jurusan</label>
					<input type="text" name="kode_jurusan" value="<?=$rs['kode_jurusan']; ?>" class="form-control">
				</div>
                <div class="mb-3">
					<label for="exampleFormControlInput1" class="form-label">ruang</label>
					<input type="text" name="ruang" value="<?=$rs['ruang']; ?>" class="form-control">
				</div>
                <div class="mb-3">
					<label for="exampleFormControlInput1" class="form-label">kelas</label>
					<input type="text" name="kelas" value="<?=$rs['kelas']; ?>" class="form-control">
				</div>
                <div class="mb-3">
					<label for="exampleFormControlInput1" class="form-label">dosen_id</label>
					<input type="text" name="dosen_id" value="<?=$rs['dosen_id']; ?>" class="form-control">
				</div>
                <div class="mb-3">
					<label for="exampleFormControlInput1" class="form-label">hari</label>
					<input type="text" name="hari" value="<?=$rs['hari']; ?>" class="form-control">
				</div>
                <div class="mb-3">
					<label for="exampleFormControlInput1" class="form-label">jam_mulai</label>
					<input type="text" name="jam_mulai" value="<?=$rs['jam_mulai']; ?>" class="form-control">
				</div>
                <div class="mb-3">
					<label for="exampleFormControlInput1" class="form-label">jam_selesai</label>
					<input type="text" name="jam_selesai" value="<?=$rs['jam_selesai']; ?>" class="form-control">
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
