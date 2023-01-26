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
   <h1 class="h2">Form Kalender</h1>
</div>
<!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380">
</canvas> -->
<!-- <h4>Data Jadwal Kegiatan</h4> -->
<div class="table-responsive">
    <form action="simpan_kalender.php" method="POST">
       <div class="col-6">
           <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Kalender_ID</label>
                <input type="text" name="kalender_id" class="form-control"placeholder="Kalender_ID">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Identitas_ID</label>
                <input type="text" name="identitas_id" class="form-control"placeholder="Identitas_ID">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Jurusans_id</label>
                <input type="text" name="jurusans_id" class="form-control" placeholder="Jurusan_ID">
            </div>
             <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Program_ID</label>
                <input type="text" name="program_id" class="form-control" placeholder="Program_ID">
            </div>
                  
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" placeholder="Nama">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Tgl KRS Mulai</label>
                <input type="text" name="tgl_krsmulai" class="form-control" placeholder="Tgl KRS Mulai">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Tgl KRS Selesai</label>
                <input type="text" name="tgl_krs_selesai" class="form-control" placeholder="Tgl KRS Selesai">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Tgl Ubah KRS Mulai</label>
                <input type="text" name="tglubah_krsmulai" class="form-control" placeholder="Tgl Ubah KRS Mulai">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Tgl Ubah KRS Selesai</label>
                <input type="text" name="tglubah_krsselesai" class="form-control" placeholder="Tgl Ubah KRS Selesai">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Tgl Cetak Khs</label>
                <input type="text" name="tgl_cetakkhs" class="form-control" placeholder="Tgl Cetak KHS">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Aktif</label>
                <input type="text" name="aktif" class="form-control" placeholder="Aktif">
            </div>

            <div class="mb-3">
                <!-- <label for="exampleFormControlTextarea1" class="form-label">Kompetensi</label>
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