/**
* Fungsi untuk menampilkan detail data mahasiswa
* @param string root parameter menu
* @param integer id nim mahasiswa
*/
function data_detail($root, $id) {
$sql = 'SELECT nim, nama, alamat
FROM ' . MHS .
' WHERE nim=' . $id;
$res = mysql_query($sql);
if ($res) {
if (mysql_num_rows($res)) { ?>
<div class="tabel">
<table border=1 width=700 cellpadding=4 cellspacing=0>
<?php
$row = mysql_fetch_row($res); ?>
<tr>
<td>NIM</td>
<td><?php echo $row[0];?></td>
</tr>
<tr>
<td>Nama</td>
<td><?php echo $row[1];?></td>
</tr>
<tr>
<td>Alamat</td>
<td><?php echo $row[2];?></td>
</tr>
</table>
</div>
<?php
} else {
echo 'Data Tidak Ditemukan';
}
@mysql_close($res);
}
}