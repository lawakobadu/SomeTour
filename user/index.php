<!-- usahakan rapi -->
<?php 
include "koneksi.php";
session_start();
if(!isset($_SESSION['email'])) {
	echo "<script>alert('Anda harus login')</script>";
	echo "<script>location='../index.php?p=login';</script>";
}
 ?>
<center>
	<h2>Data EVENT</h2>
	<a href="../page/logout.php">LOGOUT</a> ||
	<a href="input.php">INPUT DATA</a>
	<table border="5">
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
	$jenis_pariwisata = $r['jenis_pariwisata']; ?>

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
            <td><?php echo $r['status']; ?></td>
			<td>
				<a class="edit" href="edit.php?kode_wisata=<?php echo $r['kode_wisata']; ?>">Edit|</a>
			</td>
		</tr>

<?php } ?>
		</tr>
	</table>
</center>