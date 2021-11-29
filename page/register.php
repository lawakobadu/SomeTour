<?php 
include 'koneksi.php';
?>

<div class="container">
	<div class="row">
		<form method="POST" action="" style="padding: 10px;">
			<h3> Register </h3>

			<div>
				<label for="nama">Masukkan Nama Lengkap </label>
				<input type="text" name="nama" id="nama">
			</div>
						<div>
				<label for="email">Masukkan Email </label>
				<input type="text" name="email" id="email">
			</div>
						<div>
				<label for="password">Masukkan Password </label>
				<input type="password" name="password" id="password">
			</div>

			<input type="submit" name="register" class="btn blue" value="Register" style="width: 50%;">
		</form>
	</div>
</div>


<?php 
  if(isset($_POST['register'])){
    $password=md5($_POST['password']);
    $level='user';

    $sql=mysqli_query($koneksi,"INSERT INTO user VALUES (NULL,'".$_POST['nama']."','".$_POST['email']."','".$password."','".$level."')");
    if($sql){
        echo "<script>alert('Anda berhasil Mendaftar')</script>";
        echo "<script>location='login.php';</script>";
     
          
     }
     else{
         echo "<script>alert('Gagal')</script>";
     }    
  }
 ?>