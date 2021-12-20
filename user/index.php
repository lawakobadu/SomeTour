<!-- usahakan rapi -->
<?php 
include "koneksi.php";
session_start();
if(!isset($_SESSION['email'])) {
	echo "<script>alert('Anda harus login')</script>";
	echo "<script>location='../index.php?p=login';</script>";
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
<center>
	<h2>Data Pariwisata</h2>
	<a class="btn blue lighten-1 white-text" href="../page/logout.php">LOGOUT</a>
	<a class="btn blue lighten-1 white-text" href="input.php">INPUT DATA</a>
	<br>  </br>
	<div style="padding : 10px; margin-left: 100px; margin-right:100px;">
	<table border="1" class="responsive-table striped highlight" >
		<tr>
			<td>No</td>
            <td>Kode Wisata</td>
			<td>Judul</td>
			<td>Jenis Pariwisata</td>
			<td>Deskripsi</td>
			<td>Gambar</td>
            <td>Alamat</td>
            <td>Jam Operasional</td>
			<td>Status</td>
			<td>Opsi</td>
<?php

$nomor=1;
$sql=mysqli_query($koneksi,"SELECT * FROM objek_wisata WHERE id_user = '".$_SESSION['user']['id_user']."'");

while($r=mysqli_fetch_array($sql)){ 
	$jenis_pariwisata = $r['jenis_pariwisata']; 
	$status = $r['status'];
	?>

		<tr>
			<td><?php echo $nomor++ ?></td>
            <td><?php echo $r['kode_wisata']; ?></td>
			<td><?php echo $r['judul']; ?></td>
			<td><?php echo $jenis_pariwisata ?></td>
			<td><?php echo $r['deskripsi']; ?></td>
			<td> 
			<img src="../img/<?php echo $r['gambar']; ?>" width="100" height="100">
			</td>
            <td><?php echo $r['alamat']; ?></td>
            <td><?php echo $r['jam_operasional']; ?></td>
            <td><?php 
			if ($status != 1){
				echo "Menunggu Persetujuan";
			}
			elseif($status == 1  ) {
				echo "Disetujui"; 
			}
				?></td>
			<td>
				<a class="edit" href="edit.php?kode_wisata=<?php echo $r['kode_wisata']; ?>">Edit|</a>
			</td>
		</tr>

<?php } ?>
		</tr>
	</table>
</center>