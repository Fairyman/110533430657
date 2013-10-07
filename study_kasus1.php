<html>
<head><title>Studi kasus 1</title></head>
<body>
<?php

$tm=date("H");

if($tm<=11)
{
echo 'selamat pagi';
}
elseif($tm>=11&&$tm<=18)
{
echo 'selamat siang';
}
elseif($tm>=18&&$tm<=23)
{
echo 'selamat malam';
}
else{
	echo 'waktu tidak diketahui';
}
?>
</body>
</html>