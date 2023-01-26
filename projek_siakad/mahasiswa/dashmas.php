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
        <h1 class="h2">Selamat Datang : <?php echo $_SESSION['nama_lengkap']; ?></h1> Ini Adalah Halaman Mahasiswa </h1>

    </div>

    <div class="container overflow-hidden text-center">
  <div class="row gx-5">
    <div class="col">
     <div class="p-3">Nama : UYUNUN LUSIANA</div>
    </div>
    <div class="col">
      <div class="p-3">Alamat : Banteng Keselet</div>
    </div>
  </div>
</div>

<!-- <div class="container text-center">
  <div class="row g-2">
    <div class="col-6">
      <div class="p-3">Custom column padding</div>
    </div>
    <div class="col-6">
      <div class="p-3">Custom column padding</div>
    </div>
    <div class="col-6">
      <div class="p-3">Custom column padding</div>
    </div>
    <div class="col-6">
      <div class="p-3">Custom column padding</div>
    </div>
  </div>
</div> -->
    <!-- <h4>Data Jadwal Kegiatan</h4>
    <div class="table-responsive">
        <table class="table table-striped table-bordered display nowrap" id="example" style="width:100%">
            <thead class="table-light">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">NAMA : UYUNUN LUSIANA</th>
                    <th scope="col">TTEMPAT LAHIR</th>
                    <th scope="col">JENIS KELAMIN</th>
                    <th scope="col">NAMA IBU</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">AGAMA</th>
                </tr>
            </thead>
            <tbody>
     
            </tbody>
        </table>
    </div> -->

    <!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> -->


    <!-- <div class="container-fluid mt-3">
      <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-1">
                            <div class="card-body">
                                <h3 class="card-title text-white">KRS</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">0</h2>
                                    <p class="text-white mb-0">2022</p>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-users"></i></span> 
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-2">
                            <div class="card-body">
                                <h3 class="card-title text-white">KHS</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">0</h2>
                                    <p class="text-white mb-0">2022</p>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-users"></i></span> 
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-3">
                            <div class="card-body">
                                <h3 class="card-title text-white">NILAI</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">0</h2>
                                    <p class="text-white mb-0">2022</p>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-users"></i></span> 
                            </div>
                        </div>
                    </div>
                    
                </div>           -->

                <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">
                                <span data-feather="home"></span>
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="mahasiswa.php">
                                <span data-feather="file"></span>
                                Data Mahasiswa
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="jadwal.php">
                                <span data-feather="shopping-cart"></span>
                                Data Jadwal
                                </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="krs.php">
                                <span data-feather="file"></span>
                                 KRS
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="nilai.php">
                                <span data-feather="file"></span>
                               Histori Nilai
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="informasi.php">
                                <span data-feather="file"></span>
                                Informasi Kampus
                            </a>
                        </li>
</div>
</main>
<?php
include "../layout/footer.php";
?>