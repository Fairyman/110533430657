<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Limitasi Data</title>
</head>
<body>
<form method="post" action="" name="frm_select">
Tampilkan
<select name="row_page"
onchange="document.forms.frm_select.submit();">
<option>-- pilih --</option>
<option value="5">5</option>
<option value="10">10</option>
<option value="20">20</option>
<option value="50">50</option>
<option value="100">100</option>
</select> baris per halaman.
</form>
<?php
if (isset($_POST['row_page']) && $_POST['row_page']) {
require_once './Koneksi.php';
// Batas baris data
$row = $_POST['row_page'];
// LENGKAPI
// Variabel $sql berisi pernyataan SQL retrieve dg limitasi


$sql = 'SELECT * FROM mahasiswa';
$record_num = isset($row) ? $row : 0;
$page = isset($_GET['page']) ? $_GET['page'] : 0;
$offset = $page ? ($page - 1) * $record_num : 0;
$query = $sql. ' LIMIT ' . $offset . ', ' . $record_num;
$res = mysql_query($query);


if ($res) {
if (mysql_num_rows($res)) { ?>
<table border=1 cellspacing=1 cellpadding=5>
<tr>
<th>#</th>
<th width=100>NIM</th>
<th width=150>Nama</th>
<th>Alamat</th>
</tr>
<?php
$i = 1;
while ($row = mysql_fetch_row($res)) { ?>
<tr>
<td>
<?php echo $i;?>
</td>
<td>
<?php echo $row[0];?>
</td>
<td>
<?php echo $row[1];?>
</td>
<td>
<?php echo $row[2];?>
</td>
</tr>
<?php
$i++;
}
?>
</table>
<?php
} else {
echo 'Data Tidak Ditemukan';
}
}
}
?>
</body>
</html>
