<?php include('footer.php'); ?>
<html>
</head>
<title>Data Karyawan</title>
</head>
<body>
	

<marquee>Data Absensi</a></marquee>


<body style="background: url(robotic.jpg);background-size:50cm"> 

<form method="GET" action="data_absen.php" >
<table border="2" style="color: ;margin:2% 38%;width:37vh;height:1%"> 
<tr>
<td>Search Data Absen </td>
<td><input type="text" name="cari" value="<?php if(isset($_GET['cari'])){echo $_GET['cari'];}?>">
<button type="submit">cari</button>
</td>



</form>
<table border="5" table style="margin-left:auto;margin-right:auto;margin:1% 27%;width:20cm;color:white">
	<tr style="background-color: green">
			<td>No</td>
			<td>NIK</td>
			<td>Nama</td>
            <td>Absen</td>
            <td>Tanggal Hadir</td>
            <td>Jabatan</td>
            <td>E-Mail</td>
			<th>AKSI</td>
	</tr>
    <tr>
	<?php
    include "koneksi.php";
    if(isset($_GET['cari'])){
        $pencarian = $_GET['cari'];
        $query = "select * from tbl_absensi where nik like'%".$pencarian."%' or nama like'%".$pencarian."%' or absen like'%".$pencarian."%'" ;
    }else {
        $query ="select * from tbl_absensi";
    }
    $no = 1;
    $tampil =mysqli_query($conn, $query);
    
     
    while ($d = mysqli_fetch_array($tampil)){
?>
	<tr>
	 <td><?php echo $no++;?></td>
     <td><?php echo $d['nik']; ?></td>
     <td><?php echo $d['nama']; ?></td>
     <td><?php echo $d['absen']; ?></td>
     <td><?php echo $d['tanggal_absen']; ?></td>
     <td><?php echo $d['jabatan']; ?></td>
     <td><?php echo $d['email']; ?></td>
     <td><a href="edit_data_absen.php?nik=<?php echo $d['nik'];?>">Edit</a>
          ||<a href="hapus_absen.php?nik=<?php echo $d['nik'];?>">Hapus</a>
</tr>
<?php
     }
?>		
</table>
</body>
</html>

