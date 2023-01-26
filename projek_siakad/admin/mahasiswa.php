<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
//melakukan pengalihan
header("location:../login/login.php");
}
include "../layout/header.php";
include "../config/koneksi.php";
$sql = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
       <h1 class="h2">Data Mahasiswa</h1>
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
<a href="frm_tambah_mhs.php" class="btn btn-sm btn-primary">Tambah Data</button></a>
    <br> <br>
    <div class="table-responsive">
        <table class="table table-striped table-bordered display nowrap"id="example" style="width:100%">
            <thead class="table-light">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nim</th>
                    <!-- <th scope="col">Level</th> -->
                    <!-- <th scope="col">username</th>
                    <th scope="col">password</th> -->
                    <th scope="col">angkatan</th>
                    <th scope="col">kurikulim_id</th>
                    <th scope="col">identitas</th>
                    <th scope="col">nama</th>
                    <th scope="col">foto</th>
                    <th scope="col">status_awal</th>
                    <th scope="col">status_mhs</th>
                    <th scope="col">program_id</th>
                    <th scope="col">kode_jurusan</th>
                    <th scope="col">pembimbing_akademik</th>
                    <th scope="col">kelamin</th>
                    <th scope="col">warganegara</th>
                    <th scope="col">kebangsaan</th>
                    <th scope="col">tempat_lahir</th>
                    <th scope="col">agama</th>
                    <!-- <th scope="col">status_sipil</th>
                    <th scope="col">alamat</th>
                    <th scope="col">kota</th>
                    <th scope="col">RT</th>
                    <th scope="col">Rw</th>
                    <th scope="col">kode_pos</th>
                    <th scope="col">provinsi</th>
                    <th scope="col">negara</th>
                    <th scope="col">telpon</th>
                    <th scope="col">handphone</th>
                    <th scope="col">email</th>
                    <th scope="col">alamat_asal</th>
                    <th scope="col">kota-asal</th>
                    <th scope="col">RT_asal</th>
                    <th scope="col">RW_asal</th>
                    <th scope="col">Kodepos_asal</th>
                    <th scope="col">propinsi_asal</th>
                    <th scope="col">negara_asal</th> -->
                    <th scope="col">nama_ayah</th>
                    <!-- <th scope="col">agama_ayah</th>
                    <th scope="col">pendidikan_ayah</th> -->
                    <th scope="col">pekerjaan_ayah</th>
                    <!-- <th scope="col">hidup_ayah</th> -->
                    <th scope="col">nama_ibu</th>
                    <!-- <th scope="col">agama_ibu</th>
                    <th scope="col">pendidikan_ibu</th> -->
                    <th scope="col">pekerjaan_ibu</th>
                    <!-- <th scope="col">hidup_ibu</th>
                    <th scope="col">alamat_ortu</th>
                    <th scope="col">kota_ortu</th>
                    <th scope="col">kodepos_ortu</th>
                    <th scope="col">provinsi_ortu</th>
                    <th scope="col">negara_ortu</th>
                    <th scope="col">telepon_ortu</th>
                    <th scope="col">handphone_ortu</th>
                    <th scope="col">email_ortu</th> -->
                    <th scope="col">asal_sekolah</th>
                    <!-- <th scope="col">asal_sekolah1</th>
                    <th scope="col">jenis-sekolah</th>
                    <th scope="col">kota_sekolah</th>
                    <th scope="col">jurusan_sekolah</th>
                    <th scope="col">nilai_sekolah</th>
                    <th scope="col">tahun_lulus</th> -->
                    <th scope="col">aktif</th>
                    <th scope="col">lulus_ujian</th>
                    <th scope="col">nilai_ujian</th>
                    <th scope="col">grade_ujian</th>
                    <th scope="col">tanggal_lulus</th>
                    <th scope="col">ipk</th>
                    <th scope="col">total_Sks</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php
            $no = 1;
            while ($rs = mysqli_fetch_assoc($sql)) : ?>
                <tr>
                    <td><?= $no; ?></td>
                    <td><?= $rs['nim']; ?></td>
                    <td><?= $rs['level']; ?></td>
                    <td><?= $rs['username']; ?></td>
                    <td><?= $rs['password']; ?></td>
                    <td><?= $rs['angkatan']; ?></td>
                    <td><?= $rs['kurikulum_id']; ?></td>
                    <td><?= $rs['identitas']; ?></td>
                    <td><?= $rs['nama']; ?></td>
                    <td><?= $rs['foto']; ?></td>
                    <td><?= $rs['statusawal']; ?></td>
                    <td><?= $rs['statusmhsw']; ?></td>
                    <td><?= $rs['idprog']; ?></td>
                    <td><?= $rs['kode_jurusan']; ?></td>
                    <td><?= $rs['pembimbingakademik']; ?></td>
                    <td><?= $rs['kelamin']; ?></td>
                    <td><?= $rs['kelamin']; ?></td>
                    <td><?= $rs['warganegara']; ?></td>
                    <td><?= $rs['kebangsaan']; ?></td>
                    <td><?= $rs['tempatlahir']; ?></td>
                    <td><?= $rs['tanggallahir']; ?></td>
                    <td><?= $rs['agama']; ?></td>
                    <td><?= $rs['statussipil']; ?></td>
                    <td><?= $rs['alamat']; ?></td>
                    <td><?= $rs['kota']; ?></td>
                    <td><?= $rs['rt']; ?></td>
                    <td><?= $rs['rw']; ?></td>
                    <td><?= $rs['kodepos']; ?></td>
                    <td><?= $rs['propinsi']; ?></td>
                    <td><?= $rs['negara']; ?></td>
                    <td><?= $rs['telpon']; ?></td>
                    <td><?= $rs['handphone']; ?></td>
                    <td><?= $rs['email']; ?></td>
                    <td><?= $rs['alamatasal']; ?></td>
                    <td><?= $rs['kotaasal']; ?></td>
                    <td><?= $rs['rtasal']; ?></td>
                    <td><?= $rs['rwasal']; ?></td>
                    <td><?= $rs['kodeposasal']; ?></td>
                    <td><?= $rs['propinsiasal']; ?></td>
                    <td><?= $rs['negaraasal']; ?></td>
                    <td><?= $rs['namaayah']; ?></td>
                    <td><?= $rs['agamaayah']; ?></td>
                    <td><?= $rs['pendidikanayah']; ?></td>
                    <td><?= $rs['pekerjaanayah']; ?></td>
                    <td><?= $rs['hidupayah']; ?></td>
                    <td><?= $rs['namaibu']; ?></td>
                    <td><?= $rs['agamiabu']; ?></td>
                    <td><?= $rs['pendidikanibu']; ?></td>
                    <td><?= $rs['pekerjaanibu']; ?></td>
                    <td><?= $rs['hidupibu']; ?></td>
                    <td><?= $rs['alamatortu']; ?></td>
                    <td><?= $rs['kotaortu']; ?></td>
                    <td><?= $rs['kodeposortu']; ?></td>
                    <td><?= $rs['propinsiortu']; ?></td>
                    <td><?= $rs['negaraortu']; ?></td>
                    <td><?= $rs['teleponortu']; ?></td>
                    <td><?= $rs['handphoneortu']; ?></td>
                    <td><?= $rs['emailortu']; ?></td>
                    <td><?= $rs['asalsekolah']; ?></td>
                    <td><?= $rs['asalsekolah1']; ?></td>
                    <td><?= $rs['jenissekolah']; ?></td>
                    <td><?= $rs['kotasekolah']; ?></td>
                    <td><?= $rs['jurusansekolah']; ?></td>
                    <td><?= $rs['nilaisekolah']; ?></td>
                    <td><?= $rs['tahunlulus']; ?></td>
                    <td><?= $rs['aktif']; ?></td>
                    <td><?= $rs['lulusujian']; ?></td>
                    <td><?= $rs['nilaiujian']; ?></td>
                    <td><?= $rs['gradenilai']; ?></td>
                    <td><?= $rs['tanggallulus']; ?></td>
                    <td><?= $rs['ipk']; ?></td>
                    <td><?= $rs['totalsks']; ?></td>
                    <td>
                       
                    <a href="frm_ubah_mahasiswa.php?id=<?=$rs['nim']; ?>" class="btn btn-info btn-sm">Ubah</a>
					<a href="frm_hapus_mahasiswa.php?id=<?=$rs['nim']; ?>" class="btn btn-denger btn-sm">Hapus</a>
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