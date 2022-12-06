<?php include('footer.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data absensi</title>
</head>
<body>
<body style="background: url(rapat.jpg);"> 
<h2 align="center">Absen</a></h2</marquee> 


<form action="simpan_data_absen.php" method="POST">
	<table align="center">
	
    <table style="color:white; background-color:red ;margin-left:auto; margin-right:auto;background: url(globe.jpg);margin:11% 35%;width:65vh;height:20%"> 
     
    




    
     
<title>Jam</title>
<script type="text/javascript">
    window.setTimeout("waktu()",1000);
    function waktu() {
        var tanggal = new Date();
        setTimeout("waktu()",1000);
        document.getElementById("jam").innerHTML = tanggal.getHours();
        document.getElementById("menit").innerHTML = tanggal.getMinutes();
        document.getElementById("detik").innerHTML = tanggal.getSeconds();


    }
</script>
</head>

<style>

    #jam-digital{overflow:hidden; width:350px; margin-left:auto}
    #hours{float:left; width:100px; height:50px; background-color:#6B9AB8; margin-right:25px;}
    #minute{float:left; width:100px; height:50px; background-color:#A5B1CB}
    #second{float:right; width:100px; height:50px; background-color:#FF618A; margin-left:25px}
    #jam-digital p{color:#000; font-size:36px; text-align:center; margin-top:4px}
</style>

<body onLoad="waktu()">
    <div id="jam-digital">
        <div id="hours"><p id="jam"></p></div>
        <div id="minute"><p id="menit"></p></div>
        <div id="second"><p id="detik"></p></div>
    
  
 </body>
 </html>  
    


<tr>
    <td>NIK</td><td>:</td>
    <td><input type="text" id="nik" name="nik" value=""></td>
</tr>
<tr>
    <td>Nama Karyawan</td><td>:</td>
    <td><input type="text" id="nama" name="nama" values="">
</tr>

<tr>
    <td>Absensi</td><td>:</td>
    <td><input     type="checkbox" name="absen" value="Hadir">Hadir
		<input     type="checkbox" name="absen" value="Izin">Izin
  
  
</tr>

<tr>
    <td>Tanggal Masuk</td><td>:</td>
    <td><input type="date" id="tanggal_absen" name="tanggal_absen" values="">
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
    <td><input type="email" id="email" name="email" values="">
</tr>





<td></td><td></td>
<td><input type="submit" name="submit" value="SIMPAN">
    <input type="reset"  name="submit" value="BATAL"></td>
</tr>
</form>
</table>
</body>
</html>