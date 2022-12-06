<html>
<head>
	<title>Data Karyawan</title>
</head>
<body>

<?php
    include 'koneksi.php';
    $id_karyawan = $_GET['id_karyawan'];

    $data = mysqli_query($conn, "select * from tbl_profile WHERE id_karyawan='$id_karyawan'");
    while($d = mysqli_fetch_array($data)){
        $nama           = $d['nama'];
        $jk             = $d['jk'];
        $tanggal_lahir  = $d['tanggal_lahir'];
        $alamat         = $d['alamat'];
        $no_telphone    = $d['no_telphone'];
        $jabatan        = $d['jabatan'];
        $email          = $d['email'];
        
    }
?>

</body>
<h2 align="center">Form Input Karyawan</h2>
<hr>
<form action="update_data_profile.php" method="POST">
	<table align="center">
	
</tr>
<tr>
    <td>Id Karyawan</td><td>:</td>
    <td><input type="text" id="id_karyawan" name="id_karyawan" value="<?php echo $id_karyawan; ?>"></td>
</tr>
<tr>
    <td>Nama Karyawan</td><td>:</td>
    <td><input type="text" id="nama" name="nama" value="<?php echo $nama; ?>"></td>
</tr>
<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td><input type="radio" name="jk" value="Laki-Laki" value="<?php echo $jk; ?>">Laki-Laki 
				<input     type="radio" name="jk" value="Perempuan" value="<?php echo $jk; ?>">Perempuan 
				
		</tr>

<tr>
    <td>Tanggal Lahir</td><td>:</td>
    <td><input type="date"id="tanggal_lahir" name="tanggal_lahir" value="<?php echo $tanggal_lahir; ?>">
</tr>

<tr>
    <td>Alamat</td><td>:</td>
    <td><input type="text"id="alamat" name="alamat" value="<?php echo $alamat; ?>">
</tr>
<tr>
    <td>No Telphone</td><td>:</td>
    <td><input type="text" id="no_telphone" name="no_telphone" value="<?php echo $no_telphone; ?>">
</tr>

<tr>
    <td>Jabatan</td><td>:</td>
     <td><input     type="radio" name="jabatan" value="Sekretaris"   value=" <?php echo $jabatan; ?>">Sekretaris
         <input     type="radio" name="jabatan" value="Bendahara"    value=" <?php echo $jabatan; ?>">Bendahara
         <input     type="radio" name="jabatan" value="Manajer"      value=" <?php echo $jabatan; ?>">Manajer
         <input     type="radio" name="jabatan" value="Administrasi" value=" <?php echo $jabatan; ?>">Administrasi
         <input     type="radio" name="jabatan" value="Gudang"       value=" <?php echo $jabatan; ?>">Gudang





</tr>

<tr>
    <td>E-Mail</td><td>:</td>
    <td><input type="email" id="email" name="email" value="<?php echo $email; ?>"></td>
</tr>


<td></td><td></td>
<td><input type="submit" name="submit"value="EDIT">
<input type="reset" name="submit"value="BATAL"></td>
</tr>
</form>
</table>
</body>
</html>