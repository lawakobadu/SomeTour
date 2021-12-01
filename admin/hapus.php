<?php
        include "koneksi.php";
        session_start();
        if(!isset($_SESSION['email'])) {
            echo "<script>Alert('Anda harus login')</script>";
            echo "<script>location='../page/login.php';</script>";
}

$query = mysqli_query($koneksi,"DELETE FROM objek_wisata WHERE kode_wisata='".$_GET['kode_wisata']."'");

	if ($query) {
		echo "<script>alert('Data Berhasil Dihapus')</script>";
		echo "<script>location='index.php';</script>";
	}
	else{
		echo "<script>alert('Data Gagal Dihapus')</script>";
	}
 ?>
