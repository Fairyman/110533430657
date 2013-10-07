<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>www.Faiz.net</title>
</head>

<body>
<p>
  <?PHP
$nama=$_POST['nama'];
$pass=$_POST['pass'];
if ($nama=="faiz" && $pass=="faiz"){
	echo '<p  align="center" style="font-size:24px; color:#03F; font-stretch:inherit"> login berhasil</p>';
	include ("rok.php");}
else {
	echo '<p align="center" style="font-size:24px; color:#F00; font-stretch:inherit"> login gagal </p>';
	include ("index.php");}	
?>
<p style=" color:#03F">
</body>
</html>