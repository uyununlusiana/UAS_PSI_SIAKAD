<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
	// melakukan pengalihan
	header("location:../login/login.php");
}
include "../layout/header.php";
include "../config/koneksi.php";
$sql = mysqli_query($koneksi, "SELECT * FROM kurikulum");

?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pd-2 mb-3 border-bottom">
	<hl class="h2">Data Kurikulum</h1>
	</div>
	<?php if (isset($_GET['pesan'])) : ?>
	 <div class="alert alert-success" role="alert">
	 	<?php echo $_GET['pesan']; ?>
	 </div>
	 	<?php endif; ?>
	<!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380">
</canvas> -->

	<!-- <h4>Data Jadwal Kegiatan</h4> -->
	<a href="frm_kurikulum.php" class="btn btn-sm btn-primary">Tambah Data</button></a>
	<br> <br>
	<div class="table-responsive">
		<table class="table table-striped table-bordered display nowrap"id="excample" style="width: 100%">
			<thead class="table-light">
				<tr>
					<th scope="col">#</th>
					<th scope="col">Kode</th>
					<th scope="col">Nama </th>
					<th scope="col">Jurusan</th>
					<th scope="col">Sesi</th>
					<th scope="col">Jumlah Sesi</th>
					<th scope="col">Aktif</th>
					
				</tr>
			</thead>
			<tbody>
				<?php
				$no = 1;
				while ($rs = mysqli_fetch_assoc($sql)) : ?>
					<tr>
						<td><?= $no; ?></td>
						<td><?= $rs['kurikulum_id']; ?></td>
						<td><?= $rs['kode']; ?></td>
						<td><?= $rs['nama']; ?></td>
						<td><?= $rs['jurusan_id']; ?></td>
						<td><?= $rs['sesi']; ?></td>
						<td><?= $rs['jml_sesi']; ?></td>
						<td><?= $rs['aktif']; ?></td>
                        
						
						
						<td>
						<a href="frm_ubah_kurikulum.php?id=<?=$rs['kurikulum_id']; ?>" class="btn btn-info btn-sm">Ubah</a>
						<a href="frm_hapus_kurikulum.php?id=<?=$rs['kurikulum_id']; ?>" class="btn btn-denger btn-sm">Hapus</a>
					</td>
					</tr>
				<?php
				$no++;
			endwhile;
			?>
			</tbody>
		</table>
	</div>
	</main>
	<?php
	include "../layout/footer.php";
	?>
