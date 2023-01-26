<?php
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include '../config/koneksi.php';

// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = md5($_POST['password']);

// menyeleksi data user dengan username dan password yang sesuai
$result = mysqli_query($koneksi, "SELECT * FROM login where username='$username' and password='$password'");

$cek = mysqli_num_rows($result);

if ($cek > 0) {
    $data = mysqli_fetch_array($result);
    if($data['level']=="admin"){
    $_SESSION['username'] = $username;
    $_SESSION['nama_lengkap'] = $data['nama_lengkap'];
    $_SESSION['status'] = "sudah_login";
    $_SESSION['id'] = $data['id'];
    header("location:../admin/dashboard.php");
} else {
    if($data['level']=="dosen"){
        $_SESSION['username'] = $username;
        $_SESSION['nama_lengkap'] = $data['nama_lengkap'];
        $_SESSION['status'] = "sudah_login";
        $_SESSION['id'] = $data['id'];
        header("location:../dosen/dashdos.php");
 } else {
    if($data['level']=="mahasiswa"){
        $_SESSION['username'] = $username;
        $_SESSION['nama_lengkap'] = $data['nama_lengkap'];
        $_SESSION['status'] = "sudah_login";
        $_SESSION['id'] = $data['id'];
       header("location:../mahasiswa/dashmas.php");
} else {
   header("location:login.php?pesan=gagal login data tidak ditemukan.");
}
}
}
}


// }
// }
// }
// }

//     if($data['level']=="admin"){
 
// 		$_SESSION['username'] = $username;
// 		$_SESSION['level'] = "admin";
// 		header("location:../admin/dashboard.php");
 
// 	}else if($data['level']=="dosen"){

// 		$_SESSION['username'] = $username;
// 		$_SESSION['level'] = "dosen";

// 		header("location:halaman_dosen.php");
// 	}else{

// 		header("location:index.php?pesan=gagal");
// 	}	
// }else{
//     echo mysqli_error($koneksi);
// 	// header("location:index.php?pesan=gagal");
// }





/*<!-- <?php
/*session_start();
include '../config/koneksi.php';
$username = $_POST['username'];
$password = md5($_POST['password']);
$q = mysql_query($koneksi, "select * from admin where username='$username' and password='$password'");
$r = mysql_fetch_array ($q);
$q2 = mysql_query($koneksi,"select * from dosen where username='$username' and password='$password'");
$row = mysql_fetch_array ($q2);
if (mysql_num_rows($q) == 1) {
    $_SESSION['id_user'] = $r['id_user'];
    $_SESSION['username'] = $r['username'];
    $_SESSION['password'] = $r['password'];
    // $_SESSION['level'] = 'User';
    // $_SESSION['id_devisi']= $r['id_devisi'];
    header('location:admin/dashboard.php');
}
elseif (mysql_num_rows($q2) == 1) {
    $_SESSION['dosen_id'] = $row['dosen_id'];
    $_SESSION['username'] = $row['username'];
    $_SESSION['password'] = $row['password'];
    // $_SESSION['level'] = 'Administrator';
    header('location:dosen/dashboard');
}else {
    echo "Login Gagal";
}
?> -->*/