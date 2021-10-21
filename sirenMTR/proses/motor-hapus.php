<?php
include'../koneksi.php';
$id_motor=$_GET['id'];

mysqli_query($db,
	"DELETE FROM tbmotor
	WHERE id='$id_motor'"
);
header("location:../pagez/motor/indexB.php");
?>