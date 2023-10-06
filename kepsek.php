<!DOCTYPE html>
<html>
<head>
   <title>Halaman Kepala Sekolah</title>
</head>
<body>
   <?
   session_start();

   // cek apakah yang mengakses halaman ini sudah login
if($_SESSION['level']==""){	
   header("location:index.php? pesan=gagal");
}

?>
<h1>halaman kepala sekolah</h1>

<p>Halo <b><?php  echo $_SESSION['username']; ?><b> Anda telah login sebagai <b>
<? echo $_SESSION['level']; ?></b>.</p>
<a href="logout.php">LOGOUT</a>

<br/>
<br/>

<a>Membuat Login Multi Level Dengan PHP</a>

</body>
</html>
