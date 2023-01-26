<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
//melakukan pengalihan
header("location:../login/login.php");
}
include "../layout/header.php";
include "../config/koneksi.php";
$sql = mysqli_query($koneksi, "SELECT * FROM krs");
?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
       <h1 class="h2">Data Krs</h1>
    </div>
    <?php if (isset($_GET['pesan'])) : ?>
        <div class="alert alert-success" role="alert">
           <?php echo $_GET['pesan']; ?>
        </div>
    <?php endif; ?>
<!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380">
</canvas> -->
<!-- <h4>Data Jadwal Kegiatan</h4> -->
<!-- <a href="frm_seleksi.php" class="btn btn-sm btn-primary">Tambah
Seleksi</button></a> -->
<a href="frm_tambah_krs.php" class="btn btn-sm btn-primary">Tambah Data</button></a>
    <br> <br>
    <div class="table-responsive">
        <table class="table table-striped table-bordered display nowrap"id="example" style="width:100%">
            <thead class="table-light">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">id</th>
                    <th scope="id_jadwal">
                    <th scope="col">jurusan</th>
                    <th scope="col">tahun</th>
                    <th scope="col">tgl_cetak</th>
                    <th scope="col">aktif</th>
                    <th scope="col">nim</th>
                    <th scope="col">nama_lengkap</th>
                    <th scope="col">kelas</th>
                    <th scope="col">kode_mtk</th>
                    <th scope="col">nama_matakuliah</th>
                    <th scope="col">semester</th>
                    <th scope="col">hari</th>
                    <th scope="col">jam_mulai</th>
                    <th scope="col">jam_selesai</th>
                    <th scope="col">sks</th>
		    <th scope="col">bobot</th>
		   <th scope="col">dosen</th>
		 <th scope="col">gelar</th>
                </tr>
            </thead>
            <tbody>
            <?php
            $no = 1;
            while ($rs = mysqli_fetch_assoc($sql)) : ?>
                <tr>
                    <td><?= $no; ?></td>
                    <td><?= $rs['id']; ?></td>
                    <td><?= $rs['id_jadwal']; ?></td>
                    <td><?= $rs['jurusan']; ?></td>
                    <td><?= $rs['tahun']; ?></td>
                    <td><?= $rs['tgl_cetak']; ?></td>
                    <td><?= $rs['aktif']; ?></td>
                    <td><?= $rs['nim']; ?></td>
                    <td><?= $rs['nama_lengkap']; ?></td>
                    <td><?= $rs['kelas']; ?></td>
                    <td><?= $rs['kode_mtk']; ?></td>
                    <td><?= $rs['nama_matakuliah']; ?></td>
                    <td><?= $rs['semester']; ?></td>
                    <td><?= $rs['hari']; ?></td>
                    <td><?= $rs['jam_mulai']; ?></td>
                    <td><?= $rs['jam_selesai']; ?></td>
                    <td><?= $rs['sks']; ?></td>
		   <td><?= $rs['bobot']; ?></td>
		   <td><?= $rs['dosen']; ?></td>
		   <td><?= $rs['gelar']; ?></td>
                    <td>
                       
                    <a href="frm_ubah_krs.php?id=<?=$rs['id']; ?>" class="btn btn-info btn-sm">Ubah</a>
					<a href="frm_hapus_krs.php?id=<?=$rs['id']; ?>" class="btn btn-denger btn-sm">Hapus</a>
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