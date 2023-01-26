<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
//melakukan pengalihan
header("location:../login/login.php");
}
include "../layout/header.php";
include "../config/koneksi.php";
$sql = mysqli_query($koneksi, "SELECT * FROM identitas");
?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
       <h1 class="h2">Data Identitas</h1>
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
<a href="frm_tambah_identitas.php" class="btn btn-sm btn-primary">Tambah Data</button></a>
    <br> <br>
    <div class="table-responsive">
        <table class="table table-striped table-bordered display nowrap"id="example" style="width:100%">
            <thead class="table-light">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Identitas_id</th>
                    <th scope="col">Kode Hukum</th>
                    <th scope="col">Nama Identitas</th>
                    <th scope="col">Tanggal Mulai</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Kota</th>
                    <th scope="col">Kode Pos</th>
                    <th scope="col">Telepon</th>
                    <th scope="col">Fax</th>
                    <th scope="col">Email</th>
                    <th scope="col">Website</th>
                    <th scope="col">No Akta</th>
                    <th scope="col">Tanggal Akta</th>
                    <th scope="col">No Sah</th>
                    <th scope="col">Tanggal Sah</th>
                    <th scope="col">Aktif</th>
                </tr>
            </thead>
            <tbody>
            <?php
            $no = 1;
            while ($rs = mysqli_fetch_assoc($sql)) : ?>
                <tr>
                    <td><?= $no; ?></td>
                    <td><?= $rs['identitas_id']; ?></td>
                    <td><?= $rs['kode_hukum']; ?></td>
                    <td><?= $rs['nama_identitas']; ?></td>
                    <td><?= $rs['tgl_mulai']; ?></td>
                    <td><?= $rs['alamat']; ?></td>
                    <td><?= $rs['kota']; ?></td>
                    <td><?= $rs['kode_pos']; ?></td>
                    <td><?= $rs['telepon']; ?></td>
                    <td><?= $rs['fax']; ?></td>
                    <td><?= $rs['email']; ?></td>
                    <td><?= $rs['website']; ?></td>
                    <td><?= $rs['no_akta']; ?></td>
                    <td><?= $rs['tgl_akta']; ?></td>
                    <td><?= $rs['no_sah']; ?></td>
                    <td><?= $rs['tgl_sah']; ?></td>
                    <td><?= $rs['aktif']; ?></td>
                    <td>
                       
                    <a href="frm_ubah_identitas.php?id=<?=$rs['identitas_id']; ?>" class="btn btn-info btn-sm">Ubah</a>
					<a href="frm_hapus_identitas.php?id=<?=$rs['identitas_id']; ?>" class="btn btn-denger btn-sm">Hapus</a>
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