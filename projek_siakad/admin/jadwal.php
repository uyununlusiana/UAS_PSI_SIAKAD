<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
	// melakukan pengalihan
	header("location:../login/login.php");
}
include "../layout/header.php";
include "../config/koneksi.php";
// $sql = mysqli_query($koneksi, "SELECT * FROM jadwal");
$sql = mysqli_query($koneksi,"SELECT jadwal.*, kalender_akd.kalender_id, identitas.identitas_id, program.program_id, matakuliah.matakuliah_id, jurusan.kode_jurusan FROM jadwal
INNER JOIN kalender_akd ON kalender_akd.kalender_id = jadwal.kalender_id
INNER JOIN identitas ON identitas.identitas_id = jadwal.identitas_id
INNER JOIN program ON program.program_id = jadwal.program_id
INNER JOIN matakuliah ON matakuliah.matakuliah_id = jadwal.matakuliah_id
INNER JOIN jurusan ON jurusan.kode_jurusan= jadwal.kode_jurusan");


// $query="select * from tabel5
// inner join tabel1 on tabel1.id_tabel1=tabel5.id_tabel1
// inner join tabel2 on tabel2.id_tabel2=tabel5.id_tabel2
// inner join tabel3 on tabel3.id_tabel3=tabel5.id_tabel3
// inner join tabel4 on tabel4.id_tabel4=tabel5.id_tabel4";



?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pd-2 mb-3 border-bottom">
	<hl class="h2">Data Jadwal</h1>
	</div>
	<?php if (isset($_GET['pesan'])) : ?>
	 <div class="alert alert-success" role="alert">
	 	<?php echo $_GET['pesan']; ?>
	 </div>
	 	<?php endif; ?>
	<!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380">
</canvas> -->

	<!-- <h4>Data Jadwal Kegiatan</h4> -->
	<a href="frm_tambah_jadwal.php" class="btn btn-sm btn-primary">Tambah Data</button></a>
	<br> <br>
	<div class="table-responsive">
		<table class="table table-striped table-bordered display nowrap"id="excample" style="width: 100%">
			<thead class="table-light">
				<tr>
					<th scope="col">#</th>
					<th scope="col">Jadwal Id</th>
					<th scope="col">Kalender</th>
					<th scope="col">Nama Identitas</th>
					<th scope="col">Program</th>
					<th scope="col">Matakuliah</th>
					<th scope="col">Kode Jurusan</th>
					<th scope="col">Ruang</th>
					<th scope="col">Kelas</th>
                    <th scope="col">Nama Dosen</th>
                    <th scope="col">Hari</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Kelas</th>
					<th scope="col">Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$no = 1;
				while ($rs = mysqli_fetch_assoc($sql)) : ?>
					<tr>
						<td><?= $no; ?></td>
						<td><?= $rs['jadwal_id']; ?></td>
						<td><?= $rs['kalender_id']; ?></td>
						<td><?= $rs['identitas_id']; ?></td>
						<td><?= $rs['program_id']; ?></td>
						<td><?= $rs['matakuliah_id']; ?></td>
						<td><?= $rs['kode_jurusan']; ?></td>
						<td><?= $rs['ruang']; ?></td>
                        <td><?= $rs['kelas']; ?></td>
                        <td><?= $rs['dosen_id']; ?></td>
                        <td><?= $rs['hari']; ?></td>
                        <td><?= $rs['jam_mulai']; ?></td>
                        <td><?= $rs['jam_selesai']; ?></td>
						
						
						<td>
						<a href="frm_ubah_jadwal.php?id=<?=$rs['jadwal_id']; ?>" class="btn btn-info btn-sm">Ubah</a>
						<a href="frm_hapus_jadwal.php?id=<?=$rs['jadwal_id']; ?>" class="btn btn-denger btn-sm">Hapus</a>
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
