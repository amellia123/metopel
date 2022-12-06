<?php
include "koneksi.php";
$id_karyawan = $_GET['id_karyawan'];
mysqli_query($conn, "DELETE from tbl_profile WHERE id_karyawan='$id_karyawan'");
header("location:data_profile.php");
?>