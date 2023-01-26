<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
//melakukan pengalihan
header("location:../login/login.php");
}
include "../layout/header.php";
include "../config/koneksi.php";
$sql = mysqli_query($koneksi, "SELECT * FROM dosen");
?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
       <h1 class="h2">Data Dosen</h1>
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
<a href="frm_tambah_dosen.php" class="btn btn-sm btn-primary">Tambah Data</button></a>
    <br> <br>
    <div class="table-responsive">
        <table class="table table-striped table-bordered display nowrap"id="example" style="width:100%">
            <thead class="table-light">
                <tr>
                    <th scope="col">#</th>
                     <th scope="col">Dosen_Id</th> 
                     <th scope="col">Level</th> 
                     <th scope="col">username</th>
                    <th scope="col">password</th> 
                    <th scope="col">Nidn</th>
                    <th scope="col">Nama_Lengkap</th>
                    <th scope="col">Tempat_Lahir</th>
                    <th scope="col">Tangal_Lahir</th>
                     <th scope="col">Ktp</th> 
                    <th scope="col">Agama</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Email</th>
                    <th scope="col">Telpon</th>
                    <th scope="col">handphone</th> 
                    <th scope="col">keterangan</th>
                     <th scope="col">kota</th> 
                     <th scope="col">Provinsi</th> 
                     <th scope="col">Negara</th> 
                     <th scope="col">homebase</th> 
                    <th scope="col">Jurusan</th>
                    <th scope="col">Gelar</th>
                    <th scope="col">Jenjang</th>
                    <th scope="col">Keilmuan</th>
                    <th scope="col">Jabatan</th>
                    <th scope="col">institusi induk</th>
                    <th scope="col">Tgl_bekerja</th>
                    <th scope="col">Status_Dosen</th>
                    <th scope="col">Aktif</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php
            $no = 1;
            while ($rs = mysqli_fetch_assoc($sql)) : ?>
                <tr>
                    <td><?= $no; ?></td>
                    <td><?= $rs['dosen_id']; ?></td>
                    <td><?= $rs['level']; ?></td>
                    <td><?= $rs['username']; ?></td>
                    <td><?= $rs['password']; ?></td>
                    <td><?= $rs['nidn']; ?></td>
                    <td><?= $rs['nama_lengkap']; ?></td>
                    <td><?= $rs['tempat_lahir']; ?></td>
                    <td><?= $rs['tanggal_lahir']; ?></td>
                    <td><?= $rs['ktp']; ?></td>
                    <td><?= $rs['agama']; ?></td>
                    <td><?= $rs['alamat']; ?></td>
                    <td><?= $rs['email']; ?></td>
                    <td><?= $rs['telepon']; ?></td>
                    <td><?= $rs['handphone']; ?></td>
                    <td><?= $rs['keterangan']; ?></td>
                    <td><?= $rs['kota']; ?></td>
                    <td><?= $rs['propinsi']; ?></td>
                    <td><?= $rs['negara']; ?></td>
                    <td><?= $rs['homebase']; ?></td>
                    <td><?= $rs['jurusan']; ?></td>
                    <td><?= $rs['gelar']; ?></td>
                    <td><?= $rs['jenjang']; ?></td>
                    <td><?= $rs['keilmuan']; ?></td>
                    <td><?= $rs['jabatan']; ?></td>
                    <td><?= $rs['institusi_induk']; ?></td>
                    <td><?= $rs['tgl_bekerja']; ?></td>
                    <td><?= $rs['status_dosen']; ?></td>
                    <td><?= $rs['aktif']; ?></td>
                    <td><?= $rs['foto']; ?></td>
                    <td>
                    
                    <a href="frm_ubah_dosen.php?id=<?=$rs['dosen_id']; ?>" class="btn btn-info btn-sm">Ubah</a>
					<a href="frm_hapus_dosen.php?id=<?=$rs['dosen_id']; ?>" class="btn btn-denger btn-sm">Hapus</a>
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