<html>
<head><title>Fungsi/prosedur</title></head>
<body>
<?php
//contoh prosedur
function do_print(){
//Mencetak informasi timestamp
echo time();
}
//Memanggil prosedur
do_print ();
echo '<br/>';
//contoh fungsi penjumlahan
function jumlah($a,$b){
return ($a+$b);
}
echo jumlah(2,3);
//output:5
?>
</body>
</html>