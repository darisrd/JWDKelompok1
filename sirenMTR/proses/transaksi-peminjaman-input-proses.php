<?php
include '../koneksi.php';
$id_transaksi=$_POST['id_transaksi'];
$id_anggota=$_POST['id_anggota'];
$id_motor=$_POST['id_motor'];
$tgl_pinjam=$_POST['tgl_pinjam'];
$status_anggota="Sedang Merental";
$status_motor="Tidak Tersedia";


if(isset($_POST['simpan'])){
	mysqli_query($db,
		"INSERT INTO tbtransaksi
		VALUES('$id_transaksi','$id_anggota','$id_motor','$tgl_pinjam','')"
	);
	mysqli_query($db,
		"UPDATE tbanggota
		SET status='$status_anggota'
		WHERE idanggota='$id_anggota'"
	);
	mysqli_query($db,
		"UPDATE tbmotor
		SET status='$status_motor'
		WHERE idmotor='$id_motor'"
	);
	header("location:../pagez/transaksi/indexT.php");
}
?>