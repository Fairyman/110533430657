<!DOCTYPE html>
<html>
<head>
<title>Kalkulator</title>
</head>
<body>
<form action="<?php $_SERVER['PHP_SELF'];?>" method="POST">
<input type="text" name="bil1" value="<?php echo isset($_POST['bil1']) ? $_POST['bil1'] : '';?>" />
<!--mekanisme ini sama saja dengan mekanisme if,apabilai niali pada bil1 kosong maka yng akan ditampilkan adalah karakter kosong, apabila ada isinya maka yg akan ditampilkan adalah isinya-->
<select name="op">
<option value="+" selected="<?php if($_POST['op']=='+') echo"selected"; ?>">+</option><!--pemberian nilai awal-->
<option value="-" >-</option>
<option value="x" >x</option>
<option value="/" >/</option>
</select>
<input type="text" name="bil2" value="<?php echo isset($_POST['bil2']) ? $_POST['bil2'] : '';?>" />
<!--mekanisme ini sama saja dengan mekanisme if,apabilai niali pada bil1 kosong maka yng akan ditampilkan adalah karakter kosong, apabila ada isinya maka yg akan ditampilkan adalah isinya-->
<input type="submit" value="=" />

<?php
if(isset($_POST['bil1']) && isset($_POST['bil2'])){
	/*jika variabel bil1 dan bil2 bernilai true maka jalankan perintah dibawah, maksutnya true disini adalah ada nilai didalmanya dan bukan nilai kosong
	*/
if($_POST['op']=='+'){ // operasi penambahan
	$hasil=$_POST['bil1'] + $_POST['bil2'];
	$_POST['hasil']=$hasil;}
else if($_POST['op']=='-'){ //operasi pengurangan
	$hasil=$_POST['bil1'] - $_POST['bil2'];
	$_POST['hasil']=$hasil;}
else if($_POST['op']=='x'){ //operasi perkalian
	$hasil=$_POST['bil1'] * $_POST['bil2'];
	$_POST['hasil']=$hasil;}
else if($_POST['op']=='/'){ //operasi pembagian
	$hasil=$_POST['bil1'] / $_POST['bil2'];
	$_POST['hasil']=$hasil;}
}
?>
<!--PHP berada di dalam form agar textfiled hasil masih bisa mengakses hasil yang sudah di proses dalam PHP-->

<input type="text" name="hasil" value="<?php echo isset($_POST['hasil']) ? $_POST['hasil'] : '';?>"  />
<!--mekanisme ini sama saja dengan mekanisme if,apabilai niali pada bil1 kosong maka yng akan ditampilkan adalah karakter kosong, apabila ada isinya maka yg akan ditampilkan adalah isinya-->
</form>
</body>
</html>