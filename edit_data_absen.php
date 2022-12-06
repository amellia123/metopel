<html>
<head>
	<title>Database Absen</title>
</head>
<body>

<?php
    include 'koneksi.php';
    $nik = $_GET['nik'];

    $data = mysqli_query($conn, "select * from tbl_absensi WHERE nik='$nik'");
    while($d = mysqli_fetch_array($data)){
        $nama  = $d['nama'];
        $absen    = $d['absen'];
        $tanggal_absen  = $d['tanggal_absen'];
        $jabatan   = $d['jabatan'];
        $email  = $d['email'];
        
    }
?>


<?php include('footer.php'); ?>








<h2 align="center">Form Input Absen</h2>

<form action="update_data_absen.php" method="POST">
	<table align="center">


    <body style="background: url(rapat.jpg);"> 
    <table style="color:white; background-color:red ;margin-left:auto; margin-right:auto;background: url(globe.jpg);margin:11% 35%;width:65vh;height:20%"> 
</tr>
<tr>
    <td>NIk</td><td>:</td>
    <td><input type="text" id="nik" name="nik" value="<?php echo $nik; ?>"></td>
</tr>
<tr>
    <td>Nama Karyawan</td><td>:</td>
    <td><input type="text" id="nama" name="nama" value="<?php echo $nama; ?>"></td>
</tr>
<tr>
				<td>Absen</td>
				<td>:</td>
				<td><input type="checkbox" name="absen" value="Hadir" value="<?php echo $jk; ?>">Hadir 
				<input type="checkbox" name="absen" value="Izin" value="<?php echo $jk; ?>">Izin 
				
		</tr>

<tr>
    <td>Tanggal Absen</td><td>:</td>
    <td><input type="date"id="tanggal_absen" name="tanggal_absen" value="<?php echo $tanggal_absen; ?>">
</tr>

<tr>
    <td>Jabatan</td><td>:</td>
    <td><input     type="radio" name="jabatan" value="Komputer" value="<?php echo $jabatan; ?>">Sekretaris
        <input     type="radio" name="jabatan" value="Bendahara"   value="<?php echo $jabatan; ?>">Bendahara
        <input     type="radio" name="jabatan" value="manajer"   value="<?php echo $jabatan; ?>">manajer
        <input     type="radio" name="jabatan" value="Administrasi"   value="<?php echo $jabatan; ?>">Administrasi
        <input     type="radio" name="jabatan" value="Gudang"   value="<?php echo $jabatan; ?>">Gudang

<tr>
    <td>E-Mail</td><td>:</td>
    <td><input type="email" id="email" name="email" value="<?php echo $email; ?>"></td>
</tr>








</tr>



<td></td><td></td>
<td><input type="submit" name="submit"value="EDIT">
<input type="reset" name="submit"value="BATAL"></td>
</tr>
</form>
</table>
</body>
</html>