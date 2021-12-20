<!DOCTYPE html>
<html>
<head>
  <title>Admin</title>
  <script type="text/javascript" src="../ckeditor/ckeditor.js"></script>
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


<?php
include "koneksi.php";
session_start();
if(!isset($_SESSION['email'])) {
  echo "<script>Alert('Anda harus login')</script>";
  echo "<script>location='../page/login.php';</script>";
}
$sql=mysqli_query($koneksi,"SELECT * FROM objek_wisata WHERE kode_wisata='".$_GET['kode_wisata']."' ");
$r=mysqli_fetch_array($sql);
?>
         <h2>EDIT DATA</h2>

        <form action="" method="POST" enctype="multipart/form-data">
        <div class="row" style="padding : 10px; margin-left: 100px; margin-right:100px;">

          <div class="col s12 m6">
            <label>Kode Wisata</label>
            <input type="text" name="kode_wisata" value="<?php echo $r['kode_wisata']; ?>" required>
            </div>

            <div class="col s12 m6">
            <label>Masukkan Judul</label>
            <input type="text" name="judul" required="" value="<?php echo $r['judul']; ?> ">
            </div>

            <div class="col s12 m6">
            <label>Jenis Wisata</label>
                <select name="jenis_pariwisata">
                    <option value="<?php echo $r['jenis_pariwisata']; ?> "><?php echo $r['jenis_pariwisata']; ?></option>
                    <?php 
                    $jenis= mysqli_query($koneksi, "SELECT * FROM jenis");
                    while ($rj = mysqli_fetch_array($jenis)) {
                      ?>
                      <option value="<?php echo $rj['jenis_pariwisata'] ?>"><?php echo $rj['jenis_pariwisata']; ?></option>
                  <?php } ?>
              </select>
              </div>

              <div class="col s12 m6">
              <label>Masukkan Deskripsi</label>
              <textarea class="ckeditor" id="" name="deskripsi" ><?php echo $r['deskripsi']; ?></textarea>
              </div>
              
              <div class="col s12 m6">
              <label>Masukkan Gambar</label>
              <label><input type="file" name="gambar" ><?php echo $r['gambar']; ?></label>
              </div>
              
              <div class="col s12 m6">
              <label>Alamat</label>
              <input type="text" name="alamat" required="" value="<?php echo $r['alamat']; ?>">
              <label>Jam Operasional</label>
              <input type="text" name="jam_operasional" required="" value="<?php echo $r['jam_operasional']; ?>">
              </div>

              <div class="col s12 m6">
              <label>Opsi</label>
                  <select name="status">
                    <option value="<?php echo $r['status']; ?>"> <?php echo $r['status']; ?> </option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                  </select>
                  </div>

              </div>
              <br><input type="submit" name="update" value="UPDATE">
         </form>


<?php
if(isset($_POST['update'])){
$gambar =$_FILES['gambar']['name'];
$source =$_FILES['gambar']['tmp_name'];
$folder ='../img/';
      
     if($gambar !=""){
            move_uploaded_file($source, $folder.$gambar);
            $sql=mysqli_query($koneksi,"UPDATE objek_wisata SET 
            kode_wisata='".$_POST['kode_wisata']."',
            judul='".$_POST['judul']."',
            jenis_pariwisata='".$_POST['jenis_pariwisata']."',
            deskripsi='".$_POST['deskripsi']."',
            gambar='".$gambar."',
            alamat='".$_POST['alamat']."',
            jam_operasional='".$_POST['jam_operasional']."',
            status='".$_POST['status']."'  
            
            WHERE kode_wisata='".$_GET['kode_wisata']."'");
     }
     else{
        $sql=mysqli_query($koneksi,"UPDATE objek_wisata SET 
        kode_wisata='".$_POST['kode_wisata']."',
        judul='".$_POST['judul']."',
        jenis_pariwisata='".$_POST['jenis_pariwisata']."',
        deskripsi='".$_POST['deskripsi']."',
        alamat='".$_POST['alamat']."',
        jam_operasional='".$_POST['jam_operasional']."',
        status='".$_POST['status']."'  
        
        WHERE kode_wisata='".$_GET['kode_wisata']."'");
     }
if($sql){
    echo "<script>alert('Data Berhasil Diubah')</script>";
    echo "<script>location='index.php';</script>";
    }
    else{
        echo "<script>alert('Data Gagal Diubah')</script>";
    }
}
?>