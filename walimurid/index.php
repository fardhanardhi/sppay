<?php
session_start(); //memulai session
if( !isset($_SESSION['nama_u']) ) //jika session nama tidak ada
{
 header('location:./../'.$_SESSION['akses']); //alihkan halaman
 exit();
}else{ //jika ada session
 $nama = $_SESSION['nama_u']; //menyimpan session nama ke variabel $nama
}

?>
<html>
<head>
 <title>WALI MURID</title>
   <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
</head>
<body>
 <!-- INI ADALAH HEADER -->
    <nav class="navbar navbar-default navbar-fixed-top">
       <div class="container">
         <div class="navbar-header">
           <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
             <span class="sr-only">Toggle navigation</span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
           </button>
           <a class="navbar-brand" href="#">Pembayaran SPP</a>
         </div>
         <div id="navbar" class="navbar-collapse collapse">
           <ul class="nav navbar-nav">
             <li class="active"><a href="#">Beranda</a></li>
           </ul>
           <ul class="nav navbar-nav navbar-right">
             <li><a href="./../logout.php">Logout</a></li>
           </ul>
         </div>
       </div>
     </nav>
  <br><br><br><br><br>

  <!-- INI ADALAH TAMPILAN MENU UTAMA -->
     <div class="container">
       <div class="jumbotron">
         <h1>Hallo Selamat Datang <small><?php echo $nama;?></small></h1><br>
         <p>Anda telah login sebagai wali murid, dan anda sekarang ada di dashboard wali murid.</p><br />
           <a class="btn btn-lg btn-danger" href="./../logout.php" role="button">Logout</a>
         </p>
       </div>

     </div>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="bootstrap/js/jquery.min.js"></script>
</body>
</html>