<?php
include'../koneksi.php';

$id_motor=$_POST['id'];
$nama_motor=$_POST['nama_motor'];
$merk_motor=$_POST['merk_motor'];
$status=$_POST['status'];

If(isset($_POST['simpan'])){
    mysqli_query($db,
        "UPDATE tbmotor
        SET namamotor='$nama_motor',merkmotor='$merk_motor',status='$status'
        WHERE id='$id_motor'"
    );
    header("location:../pagez/motor/indexB.php");
}
?>