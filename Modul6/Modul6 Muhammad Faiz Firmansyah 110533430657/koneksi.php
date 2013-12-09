<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php 
// Catatan: 
// Jika perlu, sesuaikan nama user dan password 
 
$host = 'localhost'; 
$user = 'root'; 
$pass = ''; 
$db   = 'myweb'; 
 
$cnn = mysql_connect($host, $user, $pass); 
if (!$cnn) { 
  exit('Koneksi Gagal'); 
} 
$db = mysql_select_db($db); 
if (!$db) { 
  exit('Gagal Memilih Database'); 
} 
 
?>
</body>
</html>