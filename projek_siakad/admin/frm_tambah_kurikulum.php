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
   <h1 class="h2">Form Kurikulum</h1>
</div>
<!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380">
</canvas> -->
<!-- <h4>Data Jadwal Kegiatan</h4> -->
<div class="table-responsive">
    <form action="simpan_kurikulum.php" method="POST">
       <div class="col-6">
           <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Kurikulum_Id</label>
                <input type="text" name="kurikulum_id" class="form-control"placeholder="Kurikulum_ID">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">kode</label>
                <input type="text" name="kode" class="form-control"placeholder="Kode">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">nama</label>
                <input type="text" name="nama" class="form-control" placeholder="Nama">
            </div>
           
             <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">jurusan</label>
                <input type="text" name="jurusan_id" class="form-control" placeholder="Jurusan">
            </div>
                  
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">sesi</label>
                <input type="text" name="sesi" class="form-control" placeholder="Sesi">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">jmlsesi</label>
                <input type="text" name="jml_sesi" class="form-control" placeholder="JmlSesi">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">aktif</label>
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
                </select> -->
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