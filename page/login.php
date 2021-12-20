
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

       
	<h4 class="blue-text">LOGIN</h4>
	<h6 class="blue-text">SomeTour</h6>

	<form class="col s12" method="POST">
		<div class="row">
			<div class="col s12">
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
		<a class="blue-text" href="register.php"><b>Registrasi Disini!</b></a>
			</label>
		</div>

		<br />
		<center>
			<div class="row">
				<button type="submit" name="login" class="col s12 btn btn-large waves-effect blue">Login</button>
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
include 'koneksi.php';

if(isset($_POST['login'])) {
  $email=(htmlentities($_POST['email']));
  $password=(htmlentities(md5($_POST['password'])));
  $query=mysqli_query($koneksi, "SELECT * FROM user WHERE email='$email' AND password='$password'");
  $baris=mysqli_fetch_array($query);
  $cek=mysqli_num_rows($query);
  $id=$baris['id_user'];
  if($cek>0) {
    if ($baris['level']=="admin") {
      session_start();
      $_SESSION['email']=$email;
      $_SESSION['user']=$baris;
      echo "<script>alert('Anda berhasil login sebagai Admin')</script>";
      echo "<script>location='../admin/index.php';</script>";
    }
    elseif ($baris['level']=="user") {
      session_start();
      $_SESSION['email']=$email;
      $_SESSION['user']=$baris;
      echo "<script>alert('Anda berhasil login sebagai User')</script>";
      echo "<script>location='../user/index.php';</script>";

    }

  }
  else{
    echo "<script>alert('Username dan Password Salah')</script>";
  }
} 

 ?>