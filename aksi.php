<?php 
include 'koneksi.php';
$experience = $_POST['experience'];
$gambar_exp = $_FILES['gambar_exp'];

$rand = rand();
$ekstensi =  array('png','jpg','jpeg','gif','JPG','JPEG','PNG');
$filename = $_FILES['gambar_exp']['name'];
$ukuran = $_FILES['gambar_exp']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

if(!in_array($ext,$ekstensi) ) {
	header("location:index.php?alert=gagal_ekstensi");
}else{
	if($ukuran < 10000000){		
		$xx = $rand.'_'.$filename;
		move_uploaded_file($_FILES['gambar_exp']['tmp_name'], 'img/share/'.$xx);
		mysqli_query($conn, "INSERT INTO experience VALUES('','$experience','$xx')") or die(mysqli_error($conn));
		header("location:index.php?alert=berhasil");
	}else{
		header("location:index.php?alert=gagal_ukuran");
	}
}