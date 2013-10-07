<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Study Kasus2</title>
</head>

<body>
</body>
<table width="100" border="2">
<?php
$k=$_POST['kolom'];
$c=$_POST['cell'];
$b=$c / $k;
$tem=1;
	function print_text($teks, $tab= true){
	echo $tab ? '<tr>'.$teks.'</tr>':'<td>'.$teks.'</td>';}
	for($a=1;$a<=$c;$a++){
	if($tem<=$a){
	print_text();
	print_text($a, false);
	$tem=$tem+$k;}
	else{
		print_text($a, false);}}
 ?>
</table>
</body>
</html>