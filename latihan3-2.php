<html>
<head><title>Casting Tipe</title></head>
<body>
<?php
$str ='123abc';
//Casting nilai variabel $str ke integer
$bil = (int) $str; // $bil =123

echo gettype($str);
//output : string

echo gettype($bil);
//output : integer
?>
</body>
</html>