<?php
include 'koneksi.php';

$nik       =$_POST['nik'];
$nama   =$_POST['nama'];
$absen        =$_POST['absen'];
$tanggal_absen  =$_POST['tanggal_absen'];
$jabatan   =$_POST['jabatan'];
$email      =$_POST['email'];

mysqli_query($conn, "UPDATE tbl_absensi SET nama='$nama',absen='$absen',tanggal_absen='$tanggal_absen',jabatan='$jabatan',email='$email' where nik='$nik'");
header("location:data_absen.php");
?>