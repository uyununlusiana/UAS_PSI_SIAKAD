<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
	// melakukan pengalihan
	header("location:../login/login.php");
}
include "../layout/header.php";
include "../config/koneksi.php";
$sql = mysqli_query($koneksi, "SELECT * FROM matakuliah");

?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pd-2 mb-3 border-bottom">
	<hl class="h2">Data Matakuliah</h1>
	</div>
	<?php if (isset($_GET['pesan'])) : ?>
	 <div class="alert alert-success" role="alert">
	 	<?php echo $_GET['pesan']; ?>
	 </div>
	 	<?php endif; ?>
	<!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380">
</canvas> -->

	<!-- <h4>Data Jadwal Kegiatan</h4> -->
	<a href="frm_tambah_matkul.php" class="btn btn-sm btn-primary">Tambah Data</button></a>
	<br> <br>
	<div class="table-responsive">
		<table class="table table-striped table-bordered display nowrap"id="excample" style="width: 100%">
			<thead class="table-light">
				<tr>
					<th scope="col">#</th>
					<th scope="col">Identitas</th>
					<th scope="col">Kode_Matkul</th>
					<th scope="col">Nama Matakuliah </th>
					<th scope="col">Nama English</th>
					<th scope="col">Semester</th>
					<th scope="col">SKS</th>
					<th scope="col">Jurusan</th>
                    <th scope="col">Kelompok Matakuliah</th>
                    <th scope="col">Jenis Matakuliah</th>
                    <th scope="col">Status Matakuliah</th>
                    <th scope="col">Kurikulum</th>
                    <th scope="col">Penanggung Jawab</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Aktif</th>
					<th scope="col">Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$no = 1;
				while ($rs = mysqli_fetch_assoc($sql)) : ?>
					<tr>
						<td><?= $no; ?></td>
						<td><?= $rs['matakuliah_id']; ?></td>
						<td><?= $rs['identitas']; ?></td>
						<td><?= $rs['kode_mtk']; ?></td>
						<td><?= $rs['nama_matakuliah']; ?></td>
						<td><?= $rs['nama_english']; ?></td>
						<td><?= $rs['semester']; ?></td>
						<td><?= $rs['jurusan']; ?></td>
                        <td><?= $rs['kelompok_mtk']; ?></td>
                        <td><?= $rs['jenis_mtk']; ?></td>
                        <td><?= $rs['jenis_kurikulum']; ?></td>
                        <td><?= $rs['status_mtk']; ?></td>
                        <td><?= $rs['kurikulum_id']; ?></td>
                        <td><?= $rs['penanggung_jawab']; ?></td>
                        <td><?= $rs['ket']; ?></td>
                        <td><?= $rs['aktif']; ?></td>
                        
						
						
						<td>
						<a href="frm_ubah_data_matkul.php?id=<?=$rs['matakuliah_id']; ?>" class="btn btn-info btn-sm">Ubah</a>
						<a href="frm_hapus_data_matkul.php?id=<?=$rs['matakuliah_id']; ?>" class="btn btn-denger btn-sm">Hapus</a>
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
