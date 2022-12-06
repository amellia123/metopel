<?php
include('koneksi.php');

$nik= $_POST['nik'];
$nama= $_POST['nama'];
$absen= $_POST['absen'];
$tanggal_absen= $_POST['tanggal_absen'];
$jabatan= $_POST['jabatan'];
$email= $_POST['email'];

mysqli_query($conn,"insert into tbl_absensi VALUES('$nik','$nama','$absen','$tanggal_absen','$jabatan','$email')");

if($simpan){

echo "<script>alert('Yess Data Berhasil Disimpan');
window.location='tambah_absen.php'</script>";
}else{

echo "<script>alert('Aduhh Data Gagal Disimpan');
window.location='tambah_absen.php'</script>";
		}
		header("location:data_absen.php");
?>