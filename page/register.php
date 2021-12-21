
<!DOCTYPE html>
<html>
<head>
 		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
 		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js">

 		<link rel="shortcut icon" href="https://images.pexels.com/photos/1236701/pexels-photo-1236701.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500">
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../assets/css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
 </head>
<body>
	<div class="section"></div>
	<main>
		<center>
			
			<div class="section"></div>

			<div class="section"></div>

			<div class="container" style="font-family: serif;:">
				<div class="z-depth-1 blue-grey lighten-5 row" style="display:inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">

       
	<h4 class="blue-text">REGISTRASI</h4>
	<h6 class="blue-text">SomeTour</h6>

	<form class="col s12" method="POST">
		<div class="row">
			<div class="col s12">
			</div>
		</div>

		<div class="row">
			<div class="input-field col s12">
      <label for="email" >Enter Your Name</label>
			<input type='text' name='nama' id='nama'/>
			
			</div>
		</div>

		<div class="row">
			<div class="input-field col s12">
      <label for="email" >Enter Your Email</label>
			<input type='text' name='email' id='email'/>
			
			</div>
		</div>

		<div class="row">
			<div class="input-field col s12">
			<input type='password' name='password' id='password'/>
			<label for="password" >Enter Your Password</label>
			</div>

			<label style="float: right;"></label>
		<a class="blue-text" href="login.php"><b>Sudah Punya Akun? Login</b></a>
			</label>
		</div>

		<br />
		<center>
			<div class="row">
				<button type="submit" name="register" class="col s12 btn btn-large waves-effect blue">Register</button>
			</div>
		</center>
				</form>
				</div>
			</div>

		</center>
	<div class="section"></div>
		<div class="section"></div>

	</main>
</body>
</html>


<?php 
include "koneksi.php";
  if(isset($_POST['register'])){
    $password=md5($_POST['password']);
    $level='user';
	$email = $_POST['email'];
	$nama = $_POST['nama'];

	$cekemail    = mysqli_query($koneksi,"SELECT email FROM user WHERE email='$email'");
    if($cekemail > 0) {
		echo "<script>alert('Email Telah Digunakan!')</script>";
		echo "<script>location='register.php';</script>";
        
     }
     else{
        
		 $sql=mysqli_query($koneksi,"INSERT INTO user VALUES (NULL,'".$nama."','".$email."','".$password."','".$level."')");
		 echo "<script>alert('Anda berhasil Mendaftar')</script>";
		 echo "<script>location='login.php';</script>";
     }    
  }
 ?>