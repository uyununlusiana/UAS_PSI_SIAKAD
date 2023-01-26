<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
//melakukan pengalihan
header("location:../login/login.php");
}
include "../layout/header.php";
include "../config/koneksi.php";
?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
   <h1 class="h2">Form Matakuliah</h1>
</div>
<!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380">
</canvas> -->
<!-- <h4>Data Jadwal Kegiatan</h4> -->
<div class="table-responsive">
    <form action="simpan_matkul.php" method="POST">
       <div class="col-6">
           <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Matakuliah_ID</label>
                <input type="text" name="matakuliah_id" class="form-control"placeholder="Matakuliah_ID">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Identitas</label>
                <input type="text" name="identitas" class="form-control"placeholder="Identitas">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Kode Matakuliah</label>
                <input type="text" name="kode_mtk" class="form-control" placeholder="Kode Matakuliah">
            </div>
             <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Nama Matakuliah</label>
                <input type="text" name="nama_matakuliah" class="form-control" placeholder="Nama Matakuliah">
            </div>
                  
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Nama English</label>
                <input type="text" name="nama_english" class="form-control" placeholder="Nama English">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Semester</label>
                <input type="text" name="semester" class="form-control" placeholder="Semester">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">SKS</label>
                <input type="text" name="sks" class="form-control" placeholder="SKS">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Jurusan</label>
                <input type="text" name="jurusan" class="form-control" placeholder="Jurusan">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Kelompok Matakuliah</label>
                <input type="text" name="kelompok_mtk" class="form-control" placeholder="Kelompok Matakuliah">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Jenis Matakuliah</label>
                <input type="text" name="jenis_mtk" class="form-control" placeholder="Jenis Matakuliah">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Jenis Kurikulum</label>
                <input type="text" name="jenis_kurikulum" class="form-control" placeholder="Jenis Kurikulum">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">status Matakuliah</label>
                <input type="text" name="status_mtk" class="form-control" placeholder="Status Matakuliah">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Kurikulum_ID</label>
                <input type="text" name="kurikulum_id" class="form-control" placeholder="Kurikulum_ID">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Penanggung Jawab</label>
                <input type="text" name="penanggung_jawab" class="form-control" placeholder="Penanggung Jawab">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Keterangan</label>
                <input type="text" name="Ket" class="form-control" placeholder="Keterangan">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Aktif</label>
                <input type="text" name="aktif" class="form-control" placeholder="Aktif">
            </div>
            <!-- <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Kompetensi</label>
                <select name="komptensi" class="form-control" id="">
                    <option value=""> Pilih Kompetensi</option>
                    <option value="Baca Kitab">Baca Kitab</option>
                    <option value="Tahfiz">Tahfiz</option>
                    <option value="Olah Raga">Olah Raga</option>
                    <option value="Englis">Englis</option>
                </select>
            </div> -->
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