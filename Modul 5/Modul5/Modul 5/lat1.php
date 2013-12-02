<?php
//Catatan;
/Jika perlu, sesuaikan nama user dan password

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'mysql';

$cnn = mysql_connect($host, $user, $pass);
if (!$cnn){
	exit ('Koneksi Gagal');
}
$db = mysql select db($db);
if (!$db){
	exit ('Gagal memilih database');
}
?>