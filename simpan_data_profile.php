<?php
include('koneksi.php');

$id_karyawan= $_POST['id_karyawan'];
$nama= $_POST['nama'];
$jk= $_POST['jk'];
$tanggal_lahir= $_POST['tanggal_lahir'];
$alamat= $_POST['alamat'];
$no_telphone= $_POST['no_telphone'];
$jabatan= $_POST['jabatan'];
$email= $_POST['email'];

mysqli_query($conn,"insert into tbl_profile VALUES('$id_karyawan','$nama','$jk','$tanggal_lahir','$alamat','$no_telphone','$jabatan','$email')");

if($simpan){

echo "<script>alert('Yess Data Berhasil Disimpan');
window.location='tambah_profile.php'</script>";
}else{

echo "<script>alert('Aduhh Data Gagal Disimpan');
window.location='tambah_profile.php'</script>";
		}
		header("location:data_profile.php");
?>