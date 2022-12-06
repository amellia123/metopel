<?php
include "koneksi.php";
$nik= $_GET['nik'];
mysqli_query($conn, "DELETE from tbl_absensi WHERE nik='$nik'");
header("location:data_absen.php");
?>