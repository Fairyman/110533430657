<!DOCTYPE html 
     PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 
 
<head> 
  <title>Hapus Session</title> 
</head> 
 
<body> 
 
<?php 
 
// Inisialisasi data session 
session_start(); 
 
// Set session jika belum ada 
if (isset($_SESSION['test'])) { 
 
  // Hapus session test 
  unset($_SESSION['test']); 
 
  echo 'session dihapus'; 
 
} else { 
  echo 'unset'; 
 
  // Mencetak semua elemen session 
  print_r($_SESSION); 
} 
 
?> 
 
<p> 
Tekan Refresh (F5); 
 
</body> 
 
</html>