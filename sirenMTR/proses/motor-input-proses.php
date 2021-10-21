<?php
include'../koneksi.php';
$id_motor=$_POST['id_motor'];
$nama_motor=$_POST['nama_motor'];
$merk_motor=$_POST['merk_motor'];
$status="Tersedia";
	
// if(isset($_POST['simpan'])){
// 	mysqli_query(
// 		"INSERT INTO tbbuku
// 		VALUES('$id_buku','$judul_buku','$kategori','$pengarang','$penerbit','$status')"
// 	);
// 	header("location:../index.php?p=buku");
// }

if(isset($_POST['simpan'])){

	$sql = 
	"INSERT INTO tbbuku
	VALUES('$id_buku','$judul_buku','$kategori','$pengarang','$penerbit','$status')";
	$query = mysqli_query($db, $sql);

	header("location:../pagez/buku/indexB.php");
}



?>