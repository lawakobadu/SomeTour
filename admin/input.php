<!DOCTYPE html>
 <html>
 <head>
  <title>Admin</title>
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

  <center>
    <a href="../page/logout.php">LOGOUT</a> 
    <h1>INPUT DATA</h1>
    
    <form action="" method="POST" enctype="multipart/form-data">
       <table border="5">
       <?php 
				$query = $koneksi->query('SELECT MAX(kode_wisata) as kodex FROM objek_wisata'); 
                $data = mysqli_fetch_array($query);
                $kode = $data['kodex']; 
                $kode= $kode + 1;

				 ?>
            <td>Masukkan Kode Wisata</td>
            <td><input type="text" name="kode_wisata" value="<?php echo $kode ;?>" readonly="" required></td>
        </tr>
        <tr>
            <td>Masukkan Judul</td>
            <td><input type="text" name="judul" required=""></td>
        </tr>
        <tr>
            <td>Jenis Wisata</td>
            <td>
                <select name="jenis_pariwisata">
                    <option value="" disabled selected="">Pilih Jenis</option>
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
       <td><textarea class="textarea" id="" name="deskripsi" ></textarea></td>
   </tr>
   <tr>
      <td>Masukkan Gambar</td>
      <td><input type="file" name="gambar" ></td>
  </tr>
<tr>
    <td>Alamat</td>
    <td><input type="text" name="alamat" required=""></td>
</tr>
<tr>
    <td>Jam Operasional</td>
    <td><input type="text" name="jam_operasional" required=""></td>
</tr>
<tr>
  <td>Opsi</td>
  <td>
    <select name="status">
      <option value="0">0</option>
      <option value="1">1</option>
  </select>
</td>

</table>
<br><input type="submit" name="submit" value="SIMPAN" >
</form>
</center>

<?php
include "koneksi.php";
if(isset($_POST['submit'])){

 $gambar =$_FILES['gambar']['name'];
 $source =$_FILES['gambar']['tmp_name'];
 $folder ='./gambar/';
 move_uploaded_file($source, $folder.$gambar);

 $id_user = $_SESSION['user']['id_user'];
 $kode_wisata = $_POST['kode_wisata'];
 $judul = $_POST['judul'];
 $jenis_pariwisata = $_POST['jenis_pariwisata'];
 $deskripsi = $_POST['deskripsi'];
 $alamat = $_POST['alamat'];
 $jam_operasional = $_POST['jam_operasional'];
 $status = $_POST['status'];

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

</body>
</html>