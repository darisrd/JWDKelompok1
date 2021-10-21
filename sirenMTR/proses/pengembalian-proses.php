<?php
include'../koneksi.php';


$tgl_kembali=date('Y-m-d');
$id_transaksi=$_GET['id'];
$q_transaksi=mysqli_query($db,
	"SELECT * FROM tbtransaksi WHERE idtransaksi='$id_transaksi'"
);
$r_transaksi=mysqli_fetch_array($q_transaksi);
$id_anggota=$r_transaksi['idanggota'];
$status_anggota="Tidak Meminjam";
$id_motor=$r_transaksi['idmotor'];
$status_motor="Tersedia";
	
if(isset($_GET['id'])){
	mysqli_query($db,
		"UPDATE tbtransaksi
		SET tglkembali='$tgl_kembali'
		WHERE idtransaksi='$id_transaksi'"
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