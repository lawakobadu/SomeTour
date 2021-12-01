<?php 
include 'koneksi.php';
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$password = $_POST['password'];
$tanggal = $_POST['tanggal'];
$jk = $_POST['jk'];

$rand = rand();
$ekstensi =  array('png','jpg','jpeg','gif','JPG','JPEG','PNG');
$filename = $_FILES['foto']['name'];
$ukuran = $_FILES['foto']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

if(!in_array($ext,$ekstensi) ) {
	header("location:index.php?alert=gagal_ekstensi");
}else{
	if($ukuran < 10000000){		
		$xx = $rand.'_'.$filename;
		move_uploaded_file($_FILES['foto']['tmp_name'], 'gambar/'.$xx);
		mysqli_query($conn, "INSERT INTO experience VALUES('$nim','$nama','$password','$tanggal','$jk','$xx')");
		header("location:index.php?alert=berhasil");
	}else{
		header("location:index.php?alert=gagal_ukuran");
	}
}