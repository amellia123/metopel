<?php include('footer.php'); ?>
<html>
<head>
	<title>Input Data Profile</title>
</head>
<body>

<body style="background: url(rapat.jpg);"> 
<h2 align="center">Form Karyawan</a></center> 

<form action="simpan_data_profile.php" method="POST">
	<table align="center">
	

    <table style="color:white; background-color:red ;margin-left:auto; margin-right:auto;background: url(globe.jpg);margin:11% 35%;width:80vh;height:20%">  
</tr>
<tr>
    <td>ID Karyawan</td><td>:</td>
    <td><input type="text" id="id_karyawan" name="id_karyawan" value=""></td>
</tr>
<tr>
    <td>Nama Karyawan</td><td>:</td>
    <td><input type="text" id="nama" name="nama" values="">
</tr>

<tr>
				<td>Jenis Kelamin</td><td>:</td>
				<td><input type="radio" name="jk" value="Laki-Laki">Laki-Laki
				<input     type="radio" name="jk" value="Perempuan">Perempuan
				
		</tr>

<tr>
    <td>Tanggal Lahir</td><td>:</td>
    <td><input type="date" id="tanggal_lahir" name="tanggal_lahir" value="tanggal_lahir">
</tr>

<tr>
    <td>Alamat</td><td>:</td>
    <td><input type="text" id="alamat" name="alamat" value="">
</tr>
<tr>
    <td>No Telphone</td><td>:</td>
    <td><input type="text" name="no_telphone" value=""></td>
</tr>

<tr>
    <td>Jabatan</td><td>:</td>
    <td><input     type="radio" name="jabatan" value="Sekretaris">Sekretaris
		<input     type="radio" name="jabatan" value="Bendahara">Bendahara
        <input     type="radio" name="jabatan" value="Manajer">Manajer
        <input     type="radio" name="jabatan" value="Administrasi">Administrasi
        <input     type="radio" name="jabatan" value="Gudang">Gudang
  
</tr>


<tr>
    <td>E-Mail</td><td>:</td>
    <td><input type="email" id="email" name="email" value=""></td>
</tr>


<td></td><td></td>
<td><input type="submit" name="submit" value="SIMPAN">
    <input type="reset"  name="submit" value="BATAL"></td>
</tr>
</form>
</table>
</body>
</html>