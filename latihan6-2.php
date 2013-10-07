<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Argument Fungsi dan Prosedur</title>
</head>

<body>
<?php
/* 
  mencetak string
  $teks nilai string
  $bold adalah argumen opsional
*/
function print_text($teks, $blod=true){
	echo $blod ? '<b>' .$teks. '</b>' : $teks; }
print_text ('indonesiaku');
//mencetak dengan huruf tebal
print_text ('indonesiaku', false);
//mencetak dengan huruf reguler
?>  
</body>
</html>