<?php include('footer.php'); ?>
<html>
</head>
<title>Data Karyawan</title>
</head>
<body>
	

<marquee>Data Karyawan</a></marquee> 
<body style="background: url(robotic.jpg);background-size:50cm"> 


<form method="GET" action="data_profile.php">
<table border="2" style="margin:2% 38%;width:37vh;height:1%;color:white"> 
<tr>
<td>Search Data Absen </td>
<td><input type="text" name="cari" value="<?php if(isset($_GET['cari'])){echo $_GET['cari'];}?>">
<button type="submit">cari</button>
</td>

<table border="5" width="60%" table style="margin-left:auto;margin-right:auto;">


	<tr style="background-color: red">
			<td>No</td>
			<td>Id Karyawan</td>
			<td>Nama</td>
            <td>Jenis Kelamin</td>
            <td>Tanggal Lahir</td>
			<td>Alamat</td>
			<td>No Telphone</td>
            <td>Jabatan</td>
            <td>E-Mail</td>
			<th>AKSI</td>
	</tr>
	<?php
    include "koneksi.php";
    if(isset($_GET['cari'])){
        $pencarian = $_GET['cari'];
        $query = "select * from tbl_profile where id_karyawan like'%".$pencarian."%' or nama like'%".$pencarian."%'" ;
    }else {
        $query ="select * from tbl_profile";
    }
    $no = 1;
    $tampil =mysqli_query($conn, $query);

    while ($d = mysqli_fetch_array($tampil)){
?>
		<tr>
	 <td><?php echo $no++;?></td>
     <td><?php echo $d['id_karyawan']; ?></td>
     <td><?php echo $d['nama']; ?></td>
     <td><?php echo $d['jk']; ?></td>
     <td><?php echo $d['tanggal_lahir']; ?></td>
     <td><?php echo $d['alamat']; ?></td>
     <td><?php echo $d['no_telphone']; ?></td>
     <td><?php echo $d['jabatan']; ?></td>
     <td><?php echo $d['email']; ?></td>
     <td><a href="edit_data_profile.php?id_karyawan=<?php echo $d['id_karyawan'];?>">Edit</a>
          ||<a href="hapus_profile.php?id_karyawan=<?php echo $d['id_karyawan'];?>">Hapus</a>
</tr>
<?php
     }
?>		
</table>
</body>
</html>

