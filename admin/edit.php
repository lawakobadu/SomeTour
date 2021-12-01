<!DOCTYPE html>
<html>
<head>
  <title>Admin</title>
  <script type="text/javascript" src="../ckeditor/ckeditor.js"></script>
</head>
<body>


<?php
include "koneksi.php";
session_start();
if(!isset($_SESSION['email'])) {
  echo "<script>Alert('Anda harus login')</script>";
  echo "<script>location='../page/login.php';</script>";
}
// pada query dibawah ini sebenarnya sama dengan yang da di file data.php tapi yang membedakannya adalah where id(sebagai primary key) yang mana kita akan merubah data tersebut berdasarkan primary key pada data tersebut
$sql=mysqli_query($koneksi,"SELECT * FROM objek_wisata WHERE kode_wisata='".$_GET['kode_wisata']."' ");
$r=mysqli_fetch_array($sql);
?>

<center>
         <h1>EDIT DATA</h1>
        <form action="" method="POST" enctype="multipart/form-data">
              <table border="5">
            <td>Kode Wisata</td>

            <td><input type="text" name="kode_wisata" value="<?php echo $r['kode_wisata']; ?>" required></td>
        </tr>
        <tr>
            <td>Masukkan Judul</td>
            <td><input type="text" name="judul" required="" value="<?php echo $r['judul']; ?> "></td>
        </tr>
        <tr>
            <td>Jenis Wisata</td>
            <td>
                <select name="jenis_pariwisata">
                    <option value="<?php echo $r['jenis_pariwisata']; ?> "><?php echo $r['jenis_pariwisata']; ?></option>
                    <?php 
                    $jenis= mysqli_query($koneksi, "SELECT * FROM jenis");
                    while ($rj = mysqli_fetch_array($jenis)) {
                      ?>
                      <option value="<?php echo $rj['jenis_pariwisata'] ?>"><?php echo $rj['jenis_pariwisata']; ?></option>
                  <?php } ?>
              </select>
          </td>

      </tr>
      <tr>
       <td>Masukkan Deskripsi</td>
       <td><textarea class="textarea" id="" name="deskripsi" ><?php echo $r['deskripsi']; ?></textarea></td>
   </tr>
   <tr>
      <td>Masukkan Gambar</td>
      <td><input type="file" name="gambar" ><?php echo $r['gambar']; ?></td>
  </tr>
<tr>
    <td>Alamat</td>
    <td><input type="text" name="alamat" required="" value="<?php echo $r['alamat']; ?>"></td>
</tr>
<tr>
    <td>Jam Operasional</td>
    <td><input type="text" name="jam_operasional" required="" value="<?php echo $r['jam_operasional']; ?>"></td>
</tr>
<tr>
  <td>Opsi</td>
  <td>
    <select name="status">
        <option value="<?php echo $r['status']; ?>"> <?php echo $r['status']; ?> </option>
      <option value="0">0</option>
      <option value="1">1</option>
  </select>
</td>
              </table>
              <br><input type="submit" name="update" value="UPDATE">
         </form>
</center>

<?php
if(isset($_POST['update'])){
$gambar =$_FILES['gambar']['name'];
$source =$_FILES['gambar']['tmp_name'];
$folder ='./gambar/';
      
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