
<div class="row container">
  <div>
    <form method="POST" action="" style="padding: 20px;">
      <h3> Login </h3>
      <div>
        <label for="email">Masukkan Email</label>
        <input type="email"  name="email" id="email">  

      </div>
      <div>
        <label for="password">Masukkan Password</label>
        <input type="password"  name="password" id="password">

      </div>
      <input type="submit" name="login" class="btn blue" value="Login">

      <div>
        <a href="register.php">Register Now!
        </div>
      </form>
    </div>
  </div>

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