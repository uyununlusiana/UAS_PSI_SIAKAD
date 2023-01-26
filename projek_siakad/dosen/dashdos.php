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
        <h1 class="h2">Selamat Datang  : <?php echo $_SESSION['nama_lengkap']; ?></h3> Ini Adalah Halaman Dosen </h1>

    </div>

    <!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> -->

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="dashdos.php">
                                <span data-feather="home"></span>
                                Dashboard
                            </a>
                            </li>
                        <li class="nav-item">
                            <a class="nav-link" href="dosen.php">
                                <span data-feather="shopping-cart"></span>
                                Data Dosen
                                </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="nilai.php">
                                <span data-feather="shopping-cart"></span>
                                Data Nilai 
                                </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="jadwal.php">
                                <span data-feather="shopping-cart"></span>
                                Data Jadwal
                                </a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="data_pengasuh.php">
                                <span data-feather="users"></span>
                                Data Pengasuh
                            </a>
                        </li> -->

                        
                    </ul> 

                    <!-- <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span>Data Penunjang</span>
                        <a class="link-secondary" href="#" aria-label="Add a new report">
                            <span data-feather="plus-circle"></span>
                        </a>
                    </h6>
                    <ul class="nav flex-column mb-2">
                        <li class="nav-item">
                            <a class="nav-link" href="jadwal.php">
                                <span data-feather="file-text"></span>
                                Data Jadwal
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="matkul.php">
                                <span data-feather="file-text"></span>
                                Data Matakuliah
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="kurikulum.php">
                                <span data-feather="file-text"></span>
                                Data Kurikulum
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="program.php">
                                <span data-feather="file-text"></span>
                                Data Program
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="identitas.php">
                                <span data-feather="file-text"></span>
                                Data Identitas
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="jurusan.php">
                                <span data-feather="file-text"></span>
                                Data Jurusan
                            </a>
                        </li>  -->


    <!-- <div class="container-fluid mt-3">
      <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-1">
                            <div class="card-body">
                                <h3 class="card-title text-white">Dosen</h3>
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
                                <h3 class="card-title text-white">Mahasiswa</h3>
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
                                <h3 class="card-title text-white">Akademik</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">0</h2>
                                    <p class="text-white mb-0">2022</p>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-users"></i></span> 
                            </div>
                        </div>
                    </div>
                    
                </div>           -->

</div>
</main>
<?php
include "../layout/footer.php";
?>