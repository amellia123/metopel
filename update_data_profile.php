<?php
include 'koneksi.php';

$id_karyawan       =$_POST['id_karyawan'];
$nama   =$_POST['nama'];
$jk         =$_POST['jk'];
$tanggal_lahir  =$_POST['tanggal_lahir'];
$alamat   =$_POST['alamat'];
$no_telphone      =$_POST['no_telphone'];
$jabatan      =$_POST['jabatan'];
$email      =$_POST['email'];

mysqli_query($conn, "UPDATE tbl_profile SET nama='$nama',jk='$jk',tanggal_lahir='$tanggal_lahir',alamat='$alamat',no_telphone='$no_telphone',jabatan='$jabatan',email='$email' where id_karyawan='$id_karyawan'");
header("location:data_profile.php");
?>