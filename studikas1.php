<html>
<head><title>Studi kasus 1</title></head>
<body>
<?php

function pagi($i){
echo "Selamat pagi";
}

function sore($i)
{
echo"Selamat Siang";
}

function malam($i)
{
echo"Selamat Malam";
}

if($i=1;$i<10;i++)
{
echo pagi($i);
}
elseif($i=11;$i<16;i++)
{
echo sore($i);
}
elseif($i=18;$i<25;i++)
{
echo malam($i);
}
echo "Masukkan jam anda :"$i;
?>
</body>
</html>