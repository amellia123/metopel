<?php
if(isset($_GET['pesan'])){
    if($_GET['pesan'] == "gagal"){
            echo "<p align='center'>#</p>";
    }else if ($_GET['pesan'] == "logout"){
        echo "<marquee align='center'>Anda Telah Berhasil Log out</marquee>";
    }else if ($_GET['pesan'] == "belum_login"){
        echo "<p align='center'>Anda harus login untuk mengakses halaman admin</p>";
    }
}
?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Login</title>

    <link rel="stylesheet" href="menu_login.css">
    <script src="https://kit.fontawesome.com/de8de52639.js"
    crossorigin="anonymous"></script>
 </head>
 <body>
    <form action="cek_login.php" method="POST" class="box">
<div class="login-box">
    <h1>Login Here</h1>
    <form>
    <a href="#">
        </a>
        <p>Username</p>
        <input type="text" name="username",  placeholder="Enter Username">
        </a>
        <p>Password</p>
        <input type="password" name="password" placeholder="Enter Password">
        <input type="submit" name="submit" value="Login">
        <p><i class="fas fa-user"></i><a href="registrasi.php"> Register </a></p>
       


        <p><i class="fa fa-facebook"></i><a href="https://www.facebook.com/"> Facebook </a>
           <i class="fa fa-twitter"></i><a href="https://www.twitter.com/"> Twitter </a>
           <i class="fa fa-instagram"></i> <a href="https://www.instagaram.com/"> Instagaram </a>
        
    
    
    </p>




</form>
</div>   
 </body>
 </html>