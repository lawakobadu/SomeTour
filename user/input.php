

</body>
</html>

<!DOCTYPE html>
 <html>
 <head>
  <title>Welcome User</title>
</head>
<body>

    <?php 
    include "koneksi.php";
    
    session_start();
    if(!isset($_SESSION['email'])) {
      echo "<script>Alert('Anda harus login')</script>";
      echo "<script>location='../page/login.php';</script>";
  }
  ?>
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
  
    
    <center> <h2>INPUT DATA PARIWISATA</h2>
    <a class="btn blue lighten-1 white-text" href="../page/logout.php">LOGOUT</a>
    </center><br>
    
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="row" style="padding : 10px; margin-left: 100px; margin-right:100px;">
       <?php 
				$query = $koneksi->query('SELECT MAX(kode_wisata) as kodex FROM objek_wisata'); 
                $data = mysqli_fetch_array($query);
                $kode = $data['kodex']; 
                $kode= $kode + 1;

				 ?>
            <div class="col s12 m6">
            <label> Masukkan Kode Wisata</label>
            <input type="text" name="kode_wisata" value="<?php echo $kode ;?>" readonly="" required>   
            </div>

            <div class="col s12 m6">
            <label>Masukkan Judul </label>
            <input type="text" name="judul" required="">
            </div>

            <div class="col s12 m6">
            <label>Jenis Wisata </label>
                <select class="browser-default" name="jenis_pariwisata">
                    <option value="" disabled selected="">Pilih Jenis</option>
                    <?php 
                    $jenis= mysqli_query($koneksi, "SELECT * FROM jenis");
                    while ($rj = mysqli_fetch_array($jenis)) {
                      ?>
                      <option value="<?php echo $rj['jenis_pariwisata'] ?>"><?php echo $rj['jenis_pariwisata']; ?></option>
                  <?php } ?>
              </select>
            </div>

            <div class="col s12 m6">
                <label>Masukkan Deskripsi </label>
                <textarea class="ckeditor" id="" name="deskripsi" ></textarea>
            </div>
  
            <div class="col s12 m6">
            <label>Masukkan Alamat </label>
            <input type="text" name="alamat" required="">
            </div>

            <div class="col s12 m6">
            <label>Jam Operasional</label>
            <input type="text" name="jam_operasional" required="">
            </div>

            
            <div class="col s12 m6">
            <label>Masukkan Gambar </label>
            <br><br>
            <input type="file" name="gambar" >
            </div>



         </div>
<br><center><input class= "btn blue lightern-1" type="submit" name="submit" value="SIMPAN" ></center>
</form>

<?php
include "koneksi.php";
if(isset($_POST['submit'])){

    $id_user = $_SESSION['user']['id_user'];
    $kode_wisata = $_POST['kode_wisata'];
    $judul = $_POST['judul'];
    $jenis_pariwisata = $_POST['jenis_pariwisata'];
    $deskripsi = $_POST['deskripsi'];
    $alamat = $_POST['alamat'];
    $jam_operasional = $_POST['jam_operasional'];
    $status = 0;    

 $gambar =$_FILES['gambar']['name'];
 $source =$_FILES['gambar']['tmp_name'];
 $folder ='./../img/';

 move_uploaded_file($source, $folder.$gambar);



 $query = mysqli_query($koneksi,"INSERT INTO objek_wisata VALUES ('$kode_wisata','$id_user','$judul','$jenis_pariwisata','$deskripsi','$gambar','$alamat','$jam_operasional','$status')");

     if($query){
        echo "<script>alert('Data Berhasil Ditambahkan!')</script>";
        echo "<script>location='index.php';</script>";
    }
    else{
        echo "<script>alert('Data Gagal Ditambahkan')</script>";
 }         
}
?>