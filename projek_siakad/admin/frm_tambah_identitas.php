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
   <h1 class="h2">Form identitas</h1>
</div>
<!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380">
</canvas> -->
<!-- <h4>Data Jadwal Kegiatan</h4> -->
<div class="table-responsive">
    <form action="simpan_identitas.php" method="POST">
       <div class="col-6">
           <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">identitas_Id</label>
                <input type="text" name="identitas_id" class="form-control"placeholder="Identitas_ID"..">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">KODEHUKUM</label>
                <input type="text" name="kode_hukum" class="form-control"placeholder="KodeHukum">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">nama_identitas</label>
                <input type="text" name="nama_identitas" class="form-control" placeholder="Nama_Identitas">
            </div>
             <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">tglmulai</label>
                <input type="text" name="tgl_mulai" class="form-control" placeholder="TglMulai">
            </div>
                  
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">alamat</label>
                <input type="text" name="alamat" class="form-control" placeholder="Alamat">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">kota</label>
                <input type="text" name="kota" class="form-control" placeholder="Kota">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">kodepos</label>
                <input type="text" name="kode_pos" class="form-control" placeholder="KodePos">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">telepon</label>
                <input type="text" name="telepon" class="form-control" placeholder="Telepon">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">fax</label>
                <input type="text" name="fax" class="form-control" placeholder="Faxk">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">email</label>
                <input type="text" name="email" class="form-control" placeholder="Email">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">website</label>
                <input type="text" name="website" class="form-control" placeholder="Website">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">noakta</label>
                <input type="text" name="no_akta" class="form-control" placeholder="NoAkta">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">tglAkta</label>
                <input type="text" name="tgl_akta" class="form-control" placeholder="TglAkta">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">nosah</label>
                <input type="text" name="no_sah" class="form-control" placeholder="NoSah">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">TglSah</label>
                <input type="text" name="tgl_sah" class="form-control" placeholder="TglSah">
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