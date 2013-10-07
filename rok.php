<html>
<head><title>Halaman Website Percobaan</title>
<style type="text/css">
#sa {
	background-color: #0FC;
	text-align: center;
	height: 200px;
	width: 200px;
	border: 3px solid #CCC;
	position: relative;
}
#apDiv1 {
	position: absolute;
	left: 760px;
	top: 53px;
	width: 233px;
	height: 135px;
	z-index: 1;
}
#apDiv2 {
	position: absolute;
	left: 916px;
	top: 130px;
	width: 212px;
	height: 109px;
	z-index: 1;
}
</style>
</head>
<body bgcolor="#33CCFF">
<?php
session_start();
$nama=$_POST['nama'];
$pass=$_POST['pass'];
?>
<div id="apDiv2"><label style="font-size:24px"> Nama Pengguna :</label>
<div style=" color:#06F; font-size:24px"><?php echo ($nama);?></div><br>
<label>Tipe Variabel :</label>
<div style=" color:#06F; font-size:26px"><?php if (isset($_REQUEST['nama'])) { 
  echo gettype($nama); 
} ?></div>
</div>
<marquee>
Halaman Utama Website</marquee>
<p>Website ini Cuma untuk Mencoba dan Belajar Membuat Server pada Debian</p>
<p>adapun untuk tugas praktikum ada dibawah sini :</p>
<li>
<a href="dasar.php">Dasar Dasar PHP </a>
</li>
<li>
<a href="form.php">Penanganan FORM </a>
</li>
</body>
</html>
