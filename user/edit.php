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
    $sql=mysqli_query($koneksi,"SELECT * FROM objek_wisata WHERE kode_wisata='".$_GET['kode_wisata']."' ");
    $r=mysqli_fetch_array($sql);
  ?>

  <center>
    <a href="index.php">Kembali</a> 
    <h1>EDIT DATA</h1>
    
    <form action="" method="POST" enctype="multipart/form-data">
       <table border="5">
            <td>Masukkan Kode Wisata</td>
            <td><input type="text" name="kode_wisata" value="<?php echo $r['kode_wisata'] ;?>" readonly="" required></td>
        </tr>
        <tr>
            <td>Masukkan Judul</td>
            <td><input type="text" name="judul" required="" value="<?php echo $r['judul'] ;?>" ></td>
        </tr>
        <tr>
            <td>Jenis Wisata</td>
            <td>
                <select name="jenis_pariwisata">
                    <option value="<?php echo $r['jenis_pariwisata'] ;?>" ><?php echo $r['jenis_pariwisata'] ;?></option>
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
       <td><textarea class="ckeditor" id="ckeditor" name="deskripsi" value="<?php echo $r['deskripsi'] ;?>"><?php echo $r['deskripsi'] ;?></textarea></td>
   </tr>
   <tr>
      <td>Masukkan Gambar</td>
      <td><input type="file" name="gambar" ></td>
  </tr>
<tr>
    <td>Alamat</td>
    <td><input type="text" name="alamat" required="" value="<?php echo $r['deskripsi'] ;?>" ></td>
</tr>
<tr>
    <td>Jam Operasional</td>
    <td><input type="text" name="jam_operasional" required="" value="<?php echo $r['deskripsi'] ;?>"> </td>
</tr>


</table>
<br><input type="submit" name="submit" value="SIMPAN" >
</form>
</center>

<?php
include "koneksi.php";
if(isset($_POST['submit'])){
    $gambar =$_FILES['gambar']['name'];
    $source =$_FILES['gambar']['tmp_name'];
    $folder ='./../img/';

    if($gambar !=""){
        move_uploaded_file($source, $folder.$gambar);
        $sql=mysqli_query($koneksi,"UPDATE objek_wisata SET 
        kode_wisata='".$_POST['kode_wisata']."',
        judul='".$_POST['judul']."',
        jenis_pariwisata='".$_POST['jenis_pariwisata']."',
        deskripsi='".$_POST['deskripsi']."',
        gambar='".$gambar."',
        alamat='".$_POST['alamat']."',
        jam_operasional='".$_POST['jam_operasional']."'
        
        WHERE kode_wisata='".$_GET['kode_wisata']."'");
 }
 else{
    $sql=mysqli_query($koneksi,"UPDATE objek_wisata SET 
    kode_wisata='".$_POST['kode_wisata']."',
    judul='".$_POST['judul']."',
    jenis_pariwisata='".$_POST['jenis_pariwisata']."',
    deskripsi='".$_POST['deskripsi']."',
    alamat='".$_POST['alamat']."',
    jam_operasional='".$_POST['jam_operasional']."'
    
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
</body>
</html>