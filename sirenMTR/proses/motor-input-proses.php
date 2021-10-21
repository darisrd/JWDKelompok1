<?php
include'../koneksi.php';
$id_motor=$_POST['id_motor'];
$nama_motor=$_POST['nama_motor'];
$merk_motor=$_POST['merk_motor'];
$status="Tersedia";
	

if(isset($_POST['simpan'])){

	$sql = 
	"INSERT INTO tbmotor
	VALUES('$id_motor','$nama_motor','$merk_motor','$status')";
	$query = mysqli_query($db, $sql);

	header("location:../pagez/buku/indexB.php");
}



?>