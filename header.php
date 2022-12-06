<footer>
   
</footer>
<html>
<head>
	<title>Navigation</title>
</head>
<body>

<!-- cek apakah sudah login -->
<?php 
 
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Sidebar Menu</title>
    <script src="https://kit.fontawesome.com/de8de52639.js"
    crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="dashboard.css">
</head>
<body>

<input type="checkbox" id="check">
<label for="check">
<i class="fas fa-bars" id="btn"></i>
<i class="fas fa-times" id="cancel"></i>
</label>


    <div class="sidebar">
        <header>TOKO XY</header>
        
        <a href="dashboard.php">
            <i class="fas fa-qrcode"></i>
            <span>Dashboard</span>
</a>

<a href="profile.php">
            <i class="fas fa-book"></i>
            <span>Form Karyawan</span>
        


<a href="absensi.php">
            <i class="fas fa-book"></i>
            <span>Absen</span>
</a>

<a href="logout.php">
            <i class="fas fa-sign-out"></i>
            <span>Log Out</span>

            
</a>