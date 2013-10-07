<!DOCTYPE html 
     PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 
 
<head> 
  <title>Data Seleksi</title> 
</head> 
 
<body> 
 
  <form action="<?php $_SERVER['PHP_SELF'];?>" method="post"> 
    Tahun Lahir : 
    <select name="th"> 
      <option value="1990">1990 
      <option value="1991">1991 
      <option value="1992">1992
      <option value="1993"selected="
      <?PHP
	  if ($_post['th']=="1990"){
		  echo 'selected="selected"';}
      ?>">1993
      <option value="1994">1994 
      <option value="1995">1995 
      <option value="1996">1996
      <option value="1997">1997
      <option value="1998">1998 
      <option value="1999">1999
    </select> <br /> 
 
    <input type="submit" value="ok" /> 
  </form> 
 
<?php 
if (isset($_POST['th'])) { 
  echo $_POST['th']; 
} 
?> 
</body>
</html>